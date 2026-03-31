<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Masjid\CreateMasjid;
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
}
