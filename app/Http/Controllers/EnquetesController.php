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
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\EnqueteRequest;

class EnquetesController extends Controller
{

    public function index()
    {
        $result = Enquete::paginate(5);
        return view('pages/shared/adminCoordinator/viewEnquete', compact('result'));
    }

    public function create()
    {
        $createEnquete = TRUE;
        return view('pages/admin/newEnquete', compact('createEnquete'));
    }

    public function store(EnqueteRequest $request)
    {
        $query = Enquete::where('motif',$request->motif) 
                        ->where('contexte',$request->contexte)
                        ->where('debut',$request->debut)->get();

        if (isset($query[0]['id'])) {
            return redirect()->route('EnquetesController.create')
                            ->with('error','L\'enquête à déjà été créer.');
        } else {
            Enquete::create([
            //'Com_id' => $request->Com_id,
            'Adm_id' => $request->id,
            'motif' => $request->motif,
            'contexte' => $request->contexte,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'cout' => $request->cout,
            ]);
            return redirect()->action('EnquetesController@index')
                            ->with('success','L\'enquête a été créer avec succés.');
        }




        
    }

    public function show(Enquete $enquete)
    {
        return view('pages/shared/showEnquete', compact('enquete'));
    }

    public function edit(Enquete $enquete)
    {   
        return view('pages/admin/updateEnquete', compact('enquete'));
    }

    public function update(Request $request, Enquete $enquete)
    {
        //$result = Enquete::find($request->id);
        Enquete::where('id', $enquete->id)
                ->update([
                    //'Com_id' => $request->Com_id,
                    'Adm_id' => $request->id,
                    'motif' => $request->motif,
                    'contexte' => $request->contexte,
                    'debut' => $request->debut,
                    'fin' => $request->fin,
                    'cout' => $request->cout,
                ]);
        return redirect()->action('EnquetesController@index');
    }

    public function destroy(Enquete $enquete)
    {
        Enquete::destroy($enquete->id);
        return redirect()->action('EnquetesController@index');
    }
}
