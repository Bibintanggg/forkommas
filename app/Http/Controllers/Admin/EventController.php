<?php

namespace App\Http\Controllers\Admin;

use App\Actions\Events\CreateEvents;
use App\Actions\Events\UpdateEvents;
use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\Events;

class EventController extends Controller
{
    public function store(EventRequest $request, CreateEvents $createEvents,)
    {
        $validatedData = $request->validated();

        $event = $createEvents->handle($validatedData);

        return response()->json([
            'message' => 'Event created successfully',
            'data' => $event
        ], 201);
    }

    public function update(EventRequest $request, UpdateEvents $updateEvents, $id)
    {
        $validatedData = $request->validated();

        $event = Events::findOrFail($id);
        $updatedEvent = $updateEvents->handle($validatedData, $event);

        return response()->json([
            'message' => 'Event updated successfully',
            'data' => $updatedEvent
        ], 200);
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id);
        $event->delete();

        return response()->json([
            'message' => 'Event deleted successfully'
        ], 200);
    }
}
