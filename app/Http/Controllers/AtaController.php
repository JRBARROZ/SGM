<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Curso;
use App\Cadeira;
use App\Monitoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Ata;
use App\Gerada;
class AtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function teste($id)
    {
        $ata = Ata::where('gerada_id', $id)->get();
        $dataPadrao = Gerada::where('id', $id)->first('data');
        $data = Carbon::parse($dataPadrao[0])->format('d/m/Y');
        $user = User::with('cursos')->where('id', $ata[0]->monitor_id)->first();
        $dados_monitor = Cadeira::with('cursos')->where('id', $user->cadeira_id)->get();
        $orientador = DB::table('users')
            ->join('professores_cadeiras', 'users.id', 'professores_cadeiras.user_id')
            ->where('professores_cadeiras.cadeira_id', $user->cadeira_id)
            ->select('users.name')
        ->get();
        return \PDF::loadView('teste', compact('ata', 'user', 'data', 'dados_monitor', 'orientador'))->stream();
    }

     public function index($id)
    {

        if(Auth::user()->tipo == 'aluno'){
            return redirect('/');
        }

        // variavel qur recebe id da monitoria
        $monitoria_id = $id;

        // query de listagem de alunos
        $alunos = User::with('cursos')->where([
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

        return view('ata', compact('alunos', 'orientador', 'dados_monitor', 'monitoria_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $monitoria_id)
    {
        //Verificação se monitoria
        $users = $request->get('presente');
        $check = Ata::where('monitoria_id', $monitoria_id)->get();
        $monitoria = Monitoria::findOrfail($monitoria_id);
        if(sizeof($check) == 0){
            $ataGerada = new Gerada();
            $ataGerada->data = $request->data;
            $ataGerada->user_id = Auth::user()->id;
            $ataGerada->save();
            $gID = Gerada::where('data', $request->data)->first('id');
            // dd($request->all());
            foreach($users as $key => $item){
                $ata = new Ata();
                $ata->nome = $item;
                $ata->curso_id = Auth::user()->curso_monitoria;
                $ata->cadeira_id = Auth::user()->cadeira_id;
                $ata->monitoria_id = $monitoria_id;
                $ata->data = $monitoria->data;
                $ata->monitor_id = Auth::user()->id;
                $ata->gerada_id = $gID->id;
                $ata->save();
            }
            return redirect()->route('ataIndex', ['id' => $monitoria_id])->with('true', 'Ata cadastrada com sucesso!');
        }else{
            return redirect()->route('ataIndex', ['id' => $monitoria_id])->with('false', 'Já existe uma ata cadastrada para essa monitoria!');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function listagem($id)
    {
        $atas = Gerada::with('atas')->where('user_id', $id)->orderBy('data')->get();
        for($i = 0;$i < sizeof($atas);$i++){
            $horario = Carbon::parse($atas[$i]->data)->format('H:m:s');
            $atas[$i]->data = Carbon::parse($atas[$i]->data)->format('d/m/Y');
        }
        return view('listagem', compact('atas', 'horario'));
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
      $delete = Gerada::find($id);
      $delete->delete();
      return redirect()->back();
    }
}
