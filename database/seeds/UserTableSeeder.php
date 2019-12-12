<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Personne')->insert(
        [
            'nom' => Str::upper($request->nom),
            'prenom' => Str::ucfirst($request->prenom),
            'adresse' => Str::ucfirst($request->adresse),
            'ville' => Str::ucfirst($request->ville),
            'email' => Str::lower($request->email),
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'date_naissance' => $request->date_naissance
        ]
    );

    }
}
