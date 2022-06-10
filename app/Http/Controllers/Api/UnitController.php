<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\Unit;
use App\Http\Resources\UnitResource;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Unit::latest()->get();
        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'property_id' => 'required',
            'name' => 'required',
            'unit_picture' => 'required',
            'desc' => 'required',
            'total_unit' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $unit = Unit::create([
            'property_id' => $request->property_id,
            'unit_name' => $request->name,
            'unit_picture' => $request->unit_picture,
            'unit_description' => $request->desc,
            'total_unit' => $request->total_unit,
            'price'=>$request->price,
         ]);

        return response()->json($unit);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit = Unit::where('property_id', '=', $id)->get();
        if (is_null($unit)) {
            return response()->json('Data not found', 404);
        }
        return response()->json($unit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unit $unit)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'desc' => 'required',
            'total_unit' => 'required',
            'price' => 'required',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $unit->unit_name = $request->name;
        $unit->unit_description = $request->desc;
        $unit->total_unit = $request->total_unit;
        $unit->price = $request->price;
        $unit->save();

        return response()->json($unit);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        $unit->delete();

        return response()->json('unit deleted successfully');
    }
}
