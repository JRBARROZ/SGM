<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mensagens;
use App\User;

class MensagensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }

    public function show($id)
    {

        return view('chat.chat');
    }

   public function getMensagens(){
      $mensagens = Mensagens::with('users')->orderBy('created_at', 'desc')->get();
       return view('chat.mensagens',compact('mensagens'));

   }

  public function enviar($mensagem)
    {
        $mensagens = new Mensagens();
        $mensagens->mensagem = $mensagem;
        $mensagens->users_id = Auth::id();
        $mensagens->save();

    }

   public function count(){
    $mensagens = Mensagens::with('users')->orderBy('created_at', 'desc')->get();
   	return $count = $mensagens->count();

   }
}
