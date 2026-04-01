<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Masjid\CreateMasjid;
use App\Actions\Masjid\UpdateMasjid;
use App\Http\Controllers\Controller;
use App\Http\Requests\MasjidRequest;
use App\Models\Masjid;
use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function store(MasjidRequest $masjidRequest, CreateMasjid $createMasjid)
    {
        $validatedData = $masjidRequest->validated();

        $masjid = $createMasjid->handle($validatedData);

        return response()->json([
            'message' => 'Masjid created successfully',
            'data' => $masjid
        ], 201);
    }

    public function update(MasjidRequest $masjidRequest, UpdateMasjid $create, $id)
    {
        $validatedData = $masjidRequest->validated();

        $masjid = Masjid::findOrFail($id);
        $updatedMasjid = $create->handle($validatedData,$masjid);

        return response()->json([
            'message' => 'Masjid updated successfully',
            'data' => $updatedMasjid
        ], 200);
    }

    public function destroy($id)
    {
        $masjid = Masjid::findOrFail($id);
        $masjid->delete();
        
        return response()->json([
            'message' => 'Masjid deleted successfully',
        ], 200);
    }
}
