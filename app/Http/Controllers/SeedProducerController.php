<?php

namespace App\Http\Controllers;

use App\Models\SeedProducer;
use Illuminate\Http\Request;

class SeedProducerController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $seedProducers = SeedProducer::all();
        return response()->json($seedProducers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\SeedProducerRequest $request) {
        $seedProducer = new SeedProducer;
        $seedProducer->name = $request->name;
        $seedProducer->description = $request->description;
        $seedProducer->save();
        return($seedProducer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeedProducer  $seedProducer
     * @return \Illuminate\Http\Response
     */
    public function show(SeedProducer $seedProducer) {
        return $seedProducer;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeedProducer  $seedProducer
     * @return \Illuminate\Http\Response
     */
    public function edit(SeedProducer $seedProducer) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SeedProducer  $seedProducer
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\SeedProducerRequest $request, SeedProducer $seedProducer) {
        $seedProducer->name = $request->name;
        $seedProducer->description = $request->description;
        $seedProducer->save();
        return $seedProducer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeedProducer  $seedProducer
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeedProducer $seedProducer) {
        $seedProducer->delete();
    }

}
