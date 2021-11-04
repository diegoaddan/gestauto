<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurriculosController extends Controller
{
    public function create()
    {
        return view('curriculos.create');
    }
}
