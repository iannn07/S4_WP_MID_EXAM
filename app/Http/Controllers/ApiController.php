<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddJourneyRequest;
use App\Http\Requests\JourneyRequest;
use App\Http\Requests\UpdateJourneyRequest;
use App\Models\Journey;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Journey::all();
        return response($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddJourneyRequest $request)
    {
        $newJourney = new Journey();
        $newJourney->Job_Title = $request->Job_Title;
        $newJourney->Job_Location = $request->Job_Location;
        $newJourney->Job_Description = $request->Job_Description;
        $newJourney->Month = $request->Month;
        $newJourney->Year = $request->Year;
        $newJourney->save();

        return response('journey.index');
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
    public function update(UpdateJourneyRequest $request, string $id)
    {
        $Journey = Journey::findOrFail($id);
        $Journey->Job_Title = $request->Job_Title;
        $Journey->Job_Location = $request->Job_Location;
        $Journey->Job_Description = $request->Job_Description;
        $Journey->Month = $request->Month;
        $Journey->Year = $request->Year;
        $Journey->save();


        return response('journey.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Journey = Journey::findOrFail($id);
        $Journey->delete();

        return response('journey.index');
    }
}
