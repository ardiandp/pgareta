<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index()
    {
        //return "Ini adalah class agama";
        return view('agama/index');
    }
}
