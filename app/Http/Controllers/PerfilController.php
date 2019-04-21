<?php

namespace App\Http\Controllers;

use App\Pergunta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PerfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user('attributes');
        $perguntas = Pergunta::where('users_id', Auth::id())->orderBy('created_at', 'desc')->get();

        return view('perfil', compact('perguntas','user'));
    }
}
