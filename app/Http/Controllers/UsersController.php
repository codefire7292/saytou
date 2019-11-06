<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
     public function index()
    {
        $result = User::All();
        return view('pages/admin/viewUser', compact('result'));
    }
    public function create()
    {
        $createUser = TRUE;
        return view('pages/admin/newUser', compact('createUser'));
    }

    public function store(Request $request)
    {
        //dd($request->path());
        //dd($request->url());
        //dd($request->all());
        //dd($request->input());
        //dd($request->input('nom'));
        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'adresse' => $request->addresse,
            'ville' => $request->ville,
            'is_admin' => $request->statut,
            'password' => Hash::make($request->password),
            'date_naissance' => $request->birthday,
        ]);
        $lastUser = User::where('email', $request->email)->first()->id;
        
        //Storage::putFile('avatars', $request->file('avatar'));
        //$request->file('avatar')->store('avatars');
        //Storage::put($request->profile, new File('images/profile'));
        //dd(Storage::files('images/profile'));
        //Storage::put('images/profile', $request->profile);
        $request->file('profile')->store('images/profile');
        //Storage::move($request->profile, 'images/profile'.$lastUser);
       // $user->save();
        //return redirect()->route('user.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }
}
