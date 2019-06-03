<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mensagens;

class MensagensController extends Controller
{
//     public function __construct()
//     {
//         $this->middleware('auth')->except('index', 'show');
//     }

    public function show($id)
    {

        return view('chat.chat');
    }

   public function getMensagens(){
       $mensagens = Mensagens::with('users')->orderBy('created_at', 'desc')->get();
       return view('chat.mensagens',compact('mensagens'));
   }

   public function store(Request $mensagem){

   }

   public function count(){
    $mensagens = Mensagens::with('users')->orderBy('created_at', 'desc')->get();
   		return $count = $mensagens->count();

   }
}
