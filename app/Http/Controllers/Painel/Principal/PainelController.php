<?php

namespace App\Http\Controllers\Painel\Principal;

use App\Http\Controllers\Controller;


class PainelController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('Painel.Principal.index');
    }
}