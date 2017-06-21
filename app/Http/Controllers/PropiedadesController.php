<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;
use App\Facility;
use App\Property;

class PropiedadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertis = Property::all();    
        return view('home',compact(['propertis']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $states = State::all();
        $facilities = Facility::all();
        return view('propiedadCreate', compact(['states','facilities']));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $propiedad = new Property($request->all());
        $propiedad->save();


        $propiedad->facilities()->attach($request->facilities);

        return redirect()->route('propiedades.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $propiedad = Property::findOrFail($id);
        $stateUni = State::findOrFail($propiedad->state_id);
        $facilitiesUni = State::findOrFail($propiedad->state_id);
        $states = State::all();
        $facilities = Facility::all();

        $my_facilities = $propiedad->facilities->pluck('name')->ToArray();
        
        return view('propiedadEdit',compact('propiedad','states','stateUni','facilities','my_facilities'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $propiedad = Property::findOrFail($id);
        if($request->facilities){
            $propiedad->facilities()->detach();
        }
        $propiedad->fill($request->all()); 
        $propiedad->save(); 
        $propiedad->facilities()->attach($request->facilities);
        return redirect()->route('propiedades.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $propiedad = Property::findOrFail($id);
        $propiedad->delete();
        return redirect()->route('propiedades.index');

    }
}
