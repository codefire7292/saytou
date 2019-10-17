<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages/index');
    }

    public function help()
    {
        return view('pages/help');
    }

    public function etudiant()
    {
        return view('pages/etudiant');
    }

    public function about()
    {
        return view('pages/about');
    }
}
