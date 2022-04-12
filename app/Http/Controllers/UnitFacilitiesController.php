<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UnitHasFacilities;

use App\Http\Controllers\UnitController;

class UnitFacilitiesController extends Controller
{
    public function store(Request $request, $id, $unit_id){
        $faciliti = UnitHasFacilities::create([
            'unit_id' => $unit_id,
            'facility_id' => $request->facility
        ]);

        return redirect()->back();
    }
}
