<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function login()
    {
        return view('pages/index');
    }
//ADMIN returning
    public function admin_index()
    {
        return view('pages/admin/index');
    }

    public function new_enquete()
    {
        return view('pages/admi/newEnquete');
    }

    public function new_user()
    {
        return view('pages/admin/newUser');
    }

    public function view_user()
    {
        return view('pages/admin/viewUser');
    }
//COORDINATOR returning
    public function coordinator_index()
    {
        return view('pages/coordinator/index');
    }

    public function enquete_dispatcher()
    {
        return view('pages/coordinator/enqueteDispatcher');
    }

    public function zone()
    {
        return view('pages/coordinator/zone');
    }

//PATRON returning
    public function patron_index()
    {
        return view('pages/patron/index');
    }
//INVESTIGATOR returning
    public function investigator_index()
    {
        return view('pages/investigator/index');
    }

//SHARED returning
    public function about()
    {
        return view('pages/shared/about');
    }

    public function etudiant()
    {
        return view('pages/shared/etudiant');
    }

    public function help()
    {
        return view('pages/shared/help');
    }

    public function view_enquete()
    {
        return view('pages/shared/admin&coordinator/viewEnquete');
    }
}
