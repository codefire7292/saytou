<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use App\Models\User;
use Illuminate\Http\Request;
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
        Enquete::create([
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
