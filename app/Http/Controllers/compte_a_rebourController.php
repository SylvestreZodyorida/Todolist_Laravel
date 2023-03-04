<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class compte_a_rebourController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('compte_a_rebours');
    }
}
