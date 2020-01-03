<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Enquete;
use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Participation;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AffectationRequest;

class AffectationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $affectation = Affectation::paginate(5);
      //  $enquete = Enquete::paginate(5);
        $participation = participation::paginate(5);

        $query = User::where('role','enquêteur');
        $result = $query->oldest('nom')->paginate(5);
       // $users = User::where('role','enquêteur')->get();


        $enquetes = DB::table('Participation')
                    ->selectRaw('Enquete.motif, Enquete.cout, Enquete.id')
                    ->join('Enquete', 'Enquete.id', '=', 'Participation.Enq_id')
                    ->join('Personne', 'Personne.id', '=', 'Participation.Per_id')
                    ->where('Participation.Per_id', Auth::user()->id)
                    ->get();

        $users = DB::table('Participation')
                ->selectRaw('Personne.nom, Personne.prenom, Personne.adresse, Personne.email, Personne.id')
                ->join('Enquete', 'Enquete.id', '=', 'Participation.Enq_id')
                ->join('Personne', 'Personne.id', '=', 'Participation.Per_id')
                //->where('Participation.Per_id', Auth::user()->id)
                ->get();

        $a_enqueter = DB::table('Personne')
                ->selectRaw('Personne.nom, Personne.prenom, Enqueter.date')
                ->join('Participation', 'Participation.Per_id', '=', 'Personne.id')
                ->join('Enqueter', 'Enqueter.Per_id', '=', 'Personne.id')
                //->where('Enqueter.date', '<', 'Enquete.fin')
                ->distinct()
                ->get();
        $zones = DB::table('Zone')
                ->selectRaw('Zone.id, Zone.nom_zone, Zone.departement, Zone.region, Personne.nom, Personne.prenom')
                ->join('Personne', 'Personne.id', '=', 'Zone.Per_id')
                ->get();

        $if_affect = DB::table('Affectation')
                ->selectRaw('Personne.id')
                ->join('Personne', 'Personne.id', '=', 'Affectation.Per_id')
                ->join('Zone', 'Zone.Per_id', '=', 'Affectation.Per_id')
                //->where('Personne.id', '=', 'Affectation.Per_id')
                ->distinct()
                ->get();
        //dd($if_affect);
        return view('pages/coordinator/newDispatcher', compact('affectation','enquetes', 'participation', 'result', 'users', 'zones', 'a_enqueter', 'if_affect'));
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
    public function store(AffectationRequest $request)
    {
        //dd(date('Y-m-d H:i:s'));
        //dd($request->enquete);
        //dd($request->zone);
//////////////////        
        $role = DB::table('Personne')
                ->selectRaw('role')
                ->where('id', $request->Per_id)
                ->get();
        $Rol_id = DB::table('Role')
                ->selectRaw('id')
                ->where('nom', $role[0]->role)
                ->get();
       // dd($Rol_id[0]->id);
//////////////////        
        Affectation::create([
            'Per_id' => $request->Per_id,
            'Zon_id' => $request->zone,
            ]);

      //  if () {
            Participation::create([
                'Per_id' => $request->Per_id,
                'Enq_id' => $request->enquete,
                'Rol_id' => $Rol_id[0]->id,
                'date' => date('Y-m-d H:i:s'),
                ]);
                return redirect()->action('AffectationsController@index')
                                ->with('success','L\'utilisateur à bien été affecté avec succés.');
    //    } else {
    //    }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function show(Affectation $affectation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function edit(Affectation $affectation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Affectation $affectation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Affectation  $affectation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Affectation $affectation)
    {
        //
    }
}
