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
      $mensagens = Mensagens::with('user')->orderBy('created_at', 'asc')->get();
      return view('chat.mensagens',compact('mensagens'));

   }

  public function store(Request $request)
    {
        $mensagens = new Mensagens();
        $mensagens->mensagem = $request->mensagem;
        $mensagens->user_id = Auth::id();
        $mensagens->save();

    }

   public function count(){
    $mensagens = Mensagens::All();
   	return $count = $mensagens->count();

   }
}
