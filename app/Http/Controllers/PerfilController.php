<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Gerada;
use App\Pergunta;
use App\Cadeira;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Carbon;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {   
        $perguntas = Pergunta::with('users')->where('users_id', Auth::id())->get();
        $user = User::with('cursos')->where('id', Auth::id())->first();
        $atas  = sizeof(Gerada::where('user_id', Auth::id())->get());
        return view('user.painelHome', compact('user', 'perguntas', 'atas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $perguntas = Pergunta::with('users')->where('users_id', $id)->get();
        foreach($perguntas as $item){
            $data = Carbon::parse($item->created_at)->format('d/m/Y');
        }
        return view('user.perguntasUser', compact('perguntas', 'data'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
        $perguntas = Pergunta::with('users')->where('users_id', $id)->get();
        $user = User::with('cursos')->where('id', $id)->first();
        $atas  = sizeof(Gerada::where('user_id', $id)->get());
        $cadeiras = Cadeira::where('fk_curso', $user->fk_curso)->get();
        return view('user.painelShow', compact('user', 'perguntas', 'atas', 'cadeiras'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.painelUser', compact('user'));
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
        $user = User::find($id);
        if(Input::file('principal')){
            $imagem = Input::file('principal');
            $ext = $imagem->getClientOriginalExtension();
            if($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png'){
                return back()->with('erro', 'Erro: O formato'.' " '.$ext.' " '.'não é suportado pelo sistema.');
            }
        }
        $user->name = $request->nome;
        $user->sobrenome = $request->sNome;
        $user->matricula = $request->matricula;
        $user->periodo = $request->periodo;
        $user->fk_curso = $request->curso;
        $user->email = $request->email;
        $user->tipo = $request->cargo;
        $user->curso_monitoria = $request->cursoM;
        $user->cadeira_id = $request->cadeiraM;
        $user->save();
        if(Input::file('principal')){
            $nomeArq = "img".$user->id.'.'.$ext;
            $upload = $imagem->storeAs('avatar', $nomeArq);
            $user->avatar = $nomeArq;
            $user->save();
        }
        return redirect()->route('user.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::user('attributes');
        $perguntas = Pergunta::where('users_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('perfil', compact('perguntas','user'));
    }
}
