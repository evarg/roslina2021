<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $types = Type::with("typeGroup")->get(); 
        return response()->json($types);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\TypeRequest $request) {
        $type = new Type;
        $type->name = $request->name;
        $type->description = $request->description;
        $type->type_group_id = $request->type_group_id;
        $type->save();

        return $type;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type) {
        return $type;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\TypeRequest $request, Type $type) {
        $type->name = $request->name;
        $type->description = $request->description;
        $type->type_group_id = $request->type_group_id;
        $type->save();

        return $type;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type) {
        $type->delete();
    }

}
