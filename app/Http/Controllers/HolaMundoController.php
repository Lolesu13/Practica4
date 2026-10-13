<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaMundoController extends Controller
{
    /**
     * Display the hola mundo view.
     */
    public function index()
    {
        return view('hola_mundo');
    }
}
