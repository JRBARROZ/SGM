<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Pergunta;
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
        $queryPerguntas = new Pergunta();
        $perguntas = $queryPerguntas->listaPerguntas();        
        $cursos = Curso::all();
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
        $queryPergunta = new Pergunta();
        $pergunta = $queryPergunta->exibirPergunta($id);
        return view('pergunta', compact('pergunta'));
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

            $cursos = DB::table('cursos')
                ->where('id', '<>', $pergunta->fk_curso)
            ->get();

            $cursoAtual = Curso::find($pergunta->fk_curso);
            return view('editar-pergunta', compact('pergunta', 'cursos', 'cursoAtual'));
        }
        return view('/');
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
        var_dump($Request);
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
            $pergunta->delete();
        }
        return redirect('/');
    }

    public function filter(Request $request)
    {

    }
}
