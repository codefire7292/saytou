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
        if (Auth::user()->is_admin == 0 ) {
            return view('pages/admin/index');
        } elseif (Auth::user()->is_admin == 1 ) {
            return view('pages/coordinator/index');
        }elseif (Auth::user()->is_admin == 2 ) {
            return view('pages/investigator/index');
        }
        return view('pages/patron/index');
    }
}
