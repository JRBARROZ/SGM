<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ata;
use App\Curso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class AtasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        //Recebe e verifica se o usuário é aluno ou monitor.
        $privilegio = User::find(Auth::id());
        if($privilegio->tipo == 'aluno'){
            return redirect('/');
        }else{
            $cursos = User::find(Auth::id());
            $sigla = $cursos->cursos;
            //Pegando o curso e a sigla
            $alunos = User::where('tipo', 'aluno')->where('fk_curso', $privilegio->fk_curso)->get();
            return view('ata', compact('alunos', 'privilegio', 'sigla'));
        }
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        //Aqui recebo os nomes dos usuarios presentes.
        $value = $request->get('value');
        $request->data;
        var_dump($value);

        // Pegando SIGLA
        $cursos = User::find(Auth::id());
        $sigla = $cursos->cursos;
        $ata = new Ata();
        for($i=0; $i < sizeof($value);$i++){ 
             $ata->nome = $value[$i];
             $ata->curso = $sigla[0]['sigla'];
             $ata->id_user = Auth::id();
             $ata->id_curso = $sigla[0]['id'];
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
