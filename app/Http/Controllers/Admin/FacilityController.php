<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Facility\CreateFacility;
use App\Actions\Facility\UpdateFacility;
use App\Http\Controllers\Controller;
use App\Http\Requests\FacilityRequest;
use App\Models\Facilities;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function store(FacilityRequest $facilityRequest, CreateFacility $createFacility)
    {
        $validatedData = $facilityRequest->validated();

        $facility = $createFacility->handle($validatedData);

        return response()->json([
            'message' => 'Facility created successfully',
            'data' => $facility
        ], 201);
    }

    public function update(FacilityRequest $facilityRequest, UpdateFacility $updateFacility, $id)
    {
        $validatedData = $facilityRequest->validated();

        $facility = Facilities::findOrFail($id);
        $updatedFacility = $updateFacility->handle($validatedData, $facility);

        return response()->json([
            'message' => 'Facility updated successfully',
            'data' => $updatedFacility
        ], 200);
    }

    public function destroy($id)
    {
        $facility = Facilities::findOrFail($id);
        $facility->delete();

        return response()->json([
            'message' => 'Facility deleted successfully',
        ], 200);
    }
}

