<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use App\Models\Destination;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $voyages = Voyage::all()->orderBy('created_at');
        // $voyages = Voyage::orderBy('created_at')->get();
        $voyages = Voyage::orderBy('created_at', 'desc')->get();
        $destinations = Destination::all();
        return view('voyages.index', compact('voyages', 'destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinations = Destination::all();
        return view('voyages.create')->with('destinations', $destinations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $voyage = new voyage();
        $voyage->startDate = $request->startDate;
        $voyage->endDate = $request->endDate;
        $voyage->price = $request->price;
        $voyage->save();

        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $voyage = Voyage::findOrFail($id);
        // return view('voyages.show', compact('voyage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $voyage = Voyage::findOrFail($id);
        $destinations = Destination::all();
        return view('voyages.edit', compact('voyage', 'destinations'));
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
        
        $voyage = Voyage::findOrFail($id);
        $voyage->update([
            'startDate' => $request->startDate, 
            'endDate' => $request->endDate,
            'price' => $request->price,
            'ville' => $request->ville,
            ]);
        return redirect()->route('voyages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('destroy');
        Voyage::destroy($id);
        return redirect()->route('voyages.index');
    }
}
