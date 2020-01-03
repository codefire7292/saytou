<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Zone;
use App\Models\Enquete;
use App\Models\Enqueter;
use App\Models\Etudiant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EnqueteRequest;

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
        $enquete = Enquete::all();
        $users = DB::table('Personne')
                ->selectRaw('Personne.nom, Personne.prenom, Personne.email')
                ->join('Participation', 'Participation.Per_id', '=', 'Personne.id')
                ->get();
        $enqueter = DB::table('Personne')
                ->selectRaw('Personne.nom, Personne.prenom, Enqueter.date')
                ->join('Participation', 'Participation.Per_id', '=', 'Personne.id')
                ->join('Enqueter', 'Enqueter.Per_id', '=', 'Personne.id')
                //->where('Enqueter.date', '<', 'Enquete.fin')
                ->distinct()
                ->get();
        $zones = DB::table('Zone')
                ->selectRaw('Zone.nom_zone, Zone.departement, Zone.region, Personne.nom, Personne.prenom')
                ->join('Personne', 'Personne.id', '=', 'Zone.Per_id')
                ->get();
        return view('pages/coordinator/index', compact('enquete', 'users', 'enqueter', 'zones'));
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
