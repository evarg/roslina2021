<?php

namespace App\Http\Controllers;

use App\Models\TypeGroup;
use Illuminate\Http\Request;

class TypeGroupController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $typeGroups = TypeGroup::all();
        return response()->json($typeGroups);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\TypeGroupRequest $request) {
        $typeGroup = new TypeGroup;
        $typeGroup->name = $request->name;
        $typeGroup->save();

        return $typeGroup;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeGroup  $typeGroup
     * @return \Illuminate\Http\Response
     */
    public function show(TypeGroup $typeGroup) {
        return $typeGroup;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeGroup  $typeGroup
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\TypeGroupRequest $request, TypeGroup $typeGroup) {
        $typeGroup->name = $request->name;
        $typeGroup->save();
        return $typeGroup;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeGroup  $typeGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeGroup $typeGroup) {
        $typeGroup->delete();
    }

}
