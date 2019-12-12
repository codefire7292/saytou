<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ZoneRequest;
use Illuminate\Database\Eloquent\Model;

class ZonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Zone::paginate(5);
        return view('pages/coordinator/viewZone', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $createZone = TRUE;
        return view('pages/coordinator/newZone', compact('createZone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ZoneRequest $request)
    {
        Zone::create(
        [
            'Per_id' => $request->id_U,
            'nom_zone' => Str::ucfirst($request->nom_zone),
            'departement' => Str::ucfirst($request->departement),
            'region' => Str::ucfirst($request->region),
        ]);
        return redirect()->route('zone.create')
                        ->with('success','La zône a été créer avec succés.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function show(Zone $zone)
    {
        return view('pages/shared/showZone', compact('zone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        return view('pages/coordinator/updateZone', compact('zone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(ZoneRequest $request, Zone $zone)
    {
        $zone->update([
            'Per_id' => $request->id_U,
            'nom_zone' => Str::ucfirst($request->nom_zone),
            'departement' => Str::ucfirst($request->departement),
            'region' => Str::ucfirst($request->region),
        ]);
        return redirect()->route('zone.index')
                        ->with('success','La zône a été mise à jours avec succés.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        $zone->delete();
        return redirect()->action('ZonesController@index')
                        ->with('success','Zone supprimer avec succés');
    }
}
