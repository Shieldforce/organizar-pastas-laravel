<?php

namespace App\Http\Controllers\Home\Principal;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        return view('Home.Principal.index');
    }
}