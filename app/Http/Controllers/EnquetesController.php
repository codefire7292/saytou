<?php

namespace App\Http\Controllers;

use App\Models\Enquete;
use Illuminate\Http\Request;

class EnquetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Enquete::All();
        return view('pages/shared/adminCoordinator/viewEnquete', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $createEnquete = TRUE;
        
        return view('pages/admin/newEnquete', compact('createEnquete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Enquete::create([
            'Com_id' => $request->Com_id,
            'Adm_id' => $request->Adm_id,
            'nom' => $request->nom,
            'libelle' => $request->libelle,
            'debut' => $request->debut,
            'fin' => $request->fin,
            'cout' => $request->cout,
        ]);
        $result = Enquete::All();
        return view('pages/shared/adminCoordinator/viewEnquete', compact('result'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function show(Enquete $enquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Enquete $enquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquete $enquete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enquete  $enquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquete $enquete)
    {
        //
    }
}
