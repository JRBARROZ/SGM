<?php

namespace App\Http\Controllers;

use App\Resposta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RespostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        $resposta = new Resposta();
        $resposta->texto = $request->resposta;
        $resposta->users_id = Auth::id();
        $resposta->perguntas_id = $id;
        $resposta->save();

        return redirect('/pergunta/' . $id);
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
    public function edit($id, $perg)
    {
        $resposta = Resposta::findOrFail($id);
        if ($resposta->users_id == Auth::id()) {
            return view('editar-resposta', compact('resposta', 'perg'));
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
    public function update(Request $request, $id, $perg)
    {
        DB::table('respostas')
            ->where('id', $id)
        ->update(['texto' => $request->texto]);

        return redirect('/pergunta/' . $perg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $perg)
    {
        $resposta = Resposta::findOrFail($id);
        if ($resposta->users_id == Auth::id()) {
            $resposta->delete();
        }

        return redirect('pergunta/' . $perg);
    }
}
