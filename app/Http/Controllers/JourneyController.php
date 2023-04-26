<?php

namespace App\Http\Controllers;

use App\Models\Journey;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Journey::all();

        return view('journey.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Journey.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newJourney = new Journey();
        $newJourney->Job_Title = $request->Job_Title;
        $newJourney->Job_Location = $request->Job_Location;
        $newJourney->Job_Description = $request->Job_Description;
        $newJourney->Month = $request->Month;
        $newJourney->Year = $request->Year;
        $newJourney->save();


        return redirect()->route('journey.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
