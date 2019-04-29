<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Curso;
use App\Cadeira;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Ata;

class AtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // query de listagem de alunos
        $alunos = User::with('cadeiras')->with('cursos')->where([
            ['fk_curso', Auth::user()->curso_monitoria],
            ['periodo', Auth::user()->periodo_monitoria],
            ['tipo', 'aluno']
        ])->orWhere([
            ['fk_curso', Auth::user()->curso_monitoria],
            ['periodo', Auth::user()->periodo_monitoria],
            ['tipo', 'monitor']
        ])->get();

        // query que seleciona o professor do disciplina
        $orientador = DB::table('users')
            ->join('professores_cadeiras', 'users.id', 'professores_cadeiras.user_id')
            ->where('professores_cadeiras.cadeira_id', Auth::user()->cadeira_id)
            ->select('users.name')
        ->get();

        // query que seleciona curso e cadeira da monitoria 
        $dados_monitor = Cadeira::with('cursos')
            ->where('id', Auth::user()->cadeira_id)
        ->get();

        if(Auth::user()->tipo == 'aluno'){
            return redirect('/');
        }else{
            return view('ata', compact('alunos', 'orientador', 'dados_monitor'));
        }
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
        $monitor = User::find(Auth::id());
        $users = $request->get('presente');
        $cadeira = Cadeira::where('id', $monitor->cadeira_id)->get();
        // var_dump($cadeira[0]['fk_curso']);
        foreach($users as $item){
            $ata = new Ata();
            $ata->texto = $request->message;
            $ata->user_id = $item;
            $ata->curso_id = $monitor->fk_curso;
            $ata->cadeira_id = $cadeira[0]['id'];
            $ata->save();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
