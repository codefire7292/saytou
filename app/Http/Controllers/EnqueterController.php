<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Enqueter;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\EnqueterRequest;
use Illuminate\Database\Eloquent\Model;

class EnqueterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages/investigator/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EnqueterRequest $request)
    {
        $query = User::where('email',$request->email)->get();
        /*dd($request->prenom);
       dd($query[0]['prenom']);
       dd($query[0]['nom']);
       dd($query[0]['id']);*/
       //dd(date('Y-m-d H:i:s'));
        if (isset($query[0]['id'])) {
            if ($query[0]['nom'] === Str::upper($request->nom) AND $query[0]['prenom'] === Str::ucfirst($request->prenom)) {
                Enqueter::create([
                    'Per_id' => $request->Per_id,
                    'Per_id2' => $query[0]['id'],
                    'lieu_habite' => $request->adresse,
                    'date' => date('Y-m-d H:i:s'),
                ]);
                return redirect()->action('EnqueterController@index')
                        ->with('success','<h3>L\'étudiant à bien était enquêté.</h3>');
            } else {
                return redirect()->route('enqueter.index')
                        ->with('error','<h3>Les informations concernat l\'étudiant ne sont pas correctes.</h3><br>Veuillez bien les vérifiers ou contacter votre coordinateur pour plus d\'information.<br>Coordialement !');
            }
            
        } else {
            return redirect()->route('enqueter.index')
                        ->with('error','<h3>L\'étudiant n\'éxiste pas dans la base de donnée.</h3><br>Veuillez contacter votre coordinateur pour plus d\'information.<br>Coordialement !');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enqueter  $enqueter
     * @return \Illuminate\Http\Response
     */
    public function show(Enqueter $enqueter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enqueter  $enqueter
     * @return \Illuminate\Http\Response
     */
    public function edit(Enqueter $enqueter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enqueter  $enqueter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enqueter $enqueter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enqueter  $enqueter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enqueter $enqueter)
    {
        //
    }
}
