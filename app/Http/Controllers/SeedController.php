<?php

namespace App\Http\Controllers;

use App\Models\Seed;
use Illuminate\Http\Request;
use App\Http\Requests\SeedRequest;

class SeedController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $seeds = Seed::with('variant')->get();
        return response()->json($seeds);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SeedRequest $request) {
        $seed = new Seed;
        $seed->name = $request->name;
        $seed->description = $request->description;
        $seed->variant_id = $request->variant_id;
        $seed->producer_id = $request->producer_id;
        $seed->expiration_time = $request->expiration_time;
        $seed->save();
        return($seed);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function show(Seed $seed) {
        return $seed;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function update(SeedRequest $request, Seed $seed) {
        $seed->name = $request->name;
        $seed->description = $request->description;
        $seed->variant_id = $request->variant_id;
        $seed->producer_id = $request->producer_id;
        $seed->expiration_time = $request->expiration_time;
        $seed->save();
        return $seed;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seed  $seed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seed $seed) {
        $seed->delete();
    }

}
