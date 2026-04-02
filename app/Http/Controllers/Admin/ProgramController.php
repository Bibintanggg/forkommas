<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Program\CreateProgram;
use App\Actions\Program\UpdateProgram;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProgramRequest;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function store(ProgramRequest $programRequest, CreateProgram $createProgram)
    {
        $validatedData = $programRequest->validated();

        $program = $createProgram->handle($validatedData);

        return response()->json([
            'message' => 'Program created successfully',
            'data' => $program
        ], 201);
    }

    public function update(ProgramRequest $programRequest, UpdateProgram $updateProgram, $id)
    {
        $validatedData = $programRequest->validated();

        $program = Program::findOrFail($id);
        $updatedProgram = $updateProgram->handle($validatedData, $program);

        return response()->json([
            'message' => 'Program updated successfully',
            'data' => $updatedProgram   
        ], 200);
    }

    public function destroy($id)
    {
        $program = Program::findOrFail($id);
        $program->delete();

        return response()->json([
            'message' => 'Program deleted successfully',
        ], 200);
    }
}
