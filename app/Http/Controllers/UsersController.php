<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\User;
use Database\Seeds\UserTableSeeder;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class UsersController extends Controller
{
     public function index($role = null)
    {

        //$role = "coordinateur";

     /*   if($role) {
            if(Route::currentRouteName() == 'user.category') {
                $model = new Category;
            } else {
                $model = new Actor;
            }
        }
*/
       // dd($role);
        $query = $role ? User::whereRole($role)->where('role','!=','étudiant') : User::where('role','!=','étudiant');

        $result = $query->oldest('nom')->paginate(5);
        $profil = User::all();
        //$result = User::paginate(5);
        return view('pages/shared/adminCoordinator/viewUser', compact('result', 'profil', 'role'));
    }
    public function create()
    {
        $createUser = TRUE;
        return view('pages/admin/newUser', compact('createUser'));
    }

    public function store(UserRequest $request)
    {
        User::create(
        [
            'nom' => Str::upper($request->nom),
            'prenom' => Str::ucfirst($request->prenom),
            'adresse' => Str::ucfirst($request->adresse),
            'ville' => Str::ucfirst($request->ville),
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'date_naissance' => $request->date_naissance
        ]);
        return redirect()->route('user.index')
                        ->with('success','L\'utilisateur a été créer avec succés.');
    }

    public function show(User $user)
    {
        return view('pages/shared/showUser', compact('user'));
    }

    public function edit(User $user)
    {
        return view('pages/admin/updateUser', compact('user'));
    }

    public function update(UserRequest $request, User $user)
    {
        $user->update([
            'nom' => Str::upper($request->nom),
            'prenom' => Str::ucfirst($request->prenom),
            'adresse' => Str::ucfirst($request->adresse),
            'ville' => Str::ucfirst($request->ville),
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'date_naissance' => $request->date_naissance
        ]);
  
        return redirect()->route('user.index')
                        ->with('success','Utilisateurmis à jour avec succés');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->action('UsersController@index')
                        ->with('success','Utilisateur supprimer avec succés');
    }
}
