<?php

namespace App\Http\Controllers;

use App\User;
use App\Curso;
use App\Pergunta;
use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class PerguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    public function index()
    {   
        // $queryPerguntas = new Pergunta();
        // $perguntas = $queryPerguntas->listaPerguntas();        
        $perguntas = Pergunta::with('cursos')->get();
        // $listCurso = $perguntas->cursos;
        $cursos = Curso::all();
        /*
        foreach ($perguntas as $pergunta) {
            echo $pergunta->titulo . '<br>';
            echo $pergunta->users_id . '<br>';
            echo $pergunta->texto . '<br>';
            echo $pergunta->estado . '<br>';
            echo $pergunta->cursos[0]->sigla . '<br>';
        }
        */
        return view('index', compact('perguntas', 'cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pergunta = new Pergunta();
        $pergunta->titulo = $request->titulo;
        $pergunta->texto = $request->descricao;
        $pergunta->fk_curso = $request->curso;
        $pergunta->users_id = Auth::id();
        $pergunta->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pergunta = Pergunta::find($id);
        $curso = $pergunta->cursos;
        $respostas = Resposta::with('users')->where('respostas.perguntas_id', '=', $id)->orderBy('created_at', 'desc')->get();


        return view('pergunta', compact('respostas', 'pergunta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pergunta = Pergunta::findOrFail($id);
        if ($pergunta->users_id == Auth::id()) {
            $cursos = Curso::all();
            return view('editar-pergunta', compact('pergunta', 'cursos', 'id'));
        }
        return redirect('/');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('perguntas')
            ->where('id', '=', $id)
        ->update(
            ['titulo' => $request->titulo],
            ['texto' => $request->descricao],
            ['fk_curso' => $request->curso]
        );
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pergunta = Pergunta::findOrFail($id);
        if ($pergunta->users_id == Auth::id()) {
            $respostas = DB::table('respostas')->where('perguntas_id', '=', $id)->delete();
            $pergunta->delete();
        }
        return redirect('/');
    }

    public function filter(Request $request)
    {

    }
}
