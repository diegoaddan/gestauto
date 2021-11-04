<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function create()
    {
        return view('curriculo.create');
    }
}
