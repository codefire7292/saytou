<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Etudiant;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;

class EtudiantController extends Controller
{
    public function index()
    {
        $result = User::whereRole('etudiant')->oldest('nom')->paginate(5);
        $profil = User::all();
      //  $result = Etudiant::paginate(5);
        return view('pages/shared/etudiant', compact('result'));
    }

    public function create()
    {
        $createUser = TRUE;
        return view('pages/coordinator/newEtudiant', compact('createUser'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
                                            'title' => 'required|unique:posts|max:255',
                                            'body' => 'required',   
                             ]);
        Etudiant::create([
            'nom' => Str::upper($request->nom),
            'prenom' => Str::ucfirst($request->prenom),
            'email' => Str::lower($request->email),
            'adresse' => Str::ucfirst($request->addresse),
            'ville' => Str::ucfirst($request->ville),
            'date_naissance' => $request->birthday,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->action('EtudiantController@create');
    }

    public function show(Etudiant $etudiant)
    {
      return view('pages/shared/showEtudiant', compact('etudiant'));
    }

    public function edit(Etudiant $etudiant)
    {
        return view('pages/shared/coordinatorInvestigator/updateEtudiant', compact('etudiant'));
    }

    public function update(Request $request, Etudiant $etudiant)
    {
        Etudiant::where('id', $user->id)
            ->update([
                'nom' => Str::upper($request->nom),
                'prenom' => Str::ucfirst($request->prenom),
                'email' => Str::lower($request->email),
                'adresse' => Str::ucfirst($request->addresse),
                'ville' => Str::ucfirst($request->ville),
                'date_naissance' => $request->birthday,
                'password' => Hash::make($request->password),
            ]);
        return redirect()->action('EtudiantController@index');
    }

    public function destroy(Etudiant $etudiant)
    {
        Etudiant::destroy($etudiant->id);
        return redirect()->action('EtudiantController@index');
    }
}
