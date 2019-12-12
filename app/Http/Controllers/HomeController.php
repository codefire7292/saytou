<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
        
        if (Auth::user()->role === "admin" ) {
            return view('pages/admin/index');
        } elseif (Auth::user()->role === "coordonnateur" ) {
            return view('pages/coordinator/index');
        }elseif (Auth::user()->role === "commanditaire" ) {
            return view('pages/patron/index');
        }elseif (Auth::user()->role === "enquêteur" ) {
            return view('pages/investigator/index');
        }elseif (Auth::user()->role === "étudiant" ) {
            return view('pages/etudiant/index');
        }
    }
}
