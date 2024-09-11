<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities = Auth::user()->activities()->get();
        return response()->json($activities, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Surf,Windsurf,Kayak,ATV,Hot air baloon'],
            'dateTime' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:200'],
        ]);

        $activity = Activity::create(array_merge($validated, [
            'user_id' => Auth::user()->id,
        ]));

        $activities = Auth::user()->activities()->get();

        return response()->json($activities, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        if ($activity) {
            return response()->json($activity, 200);
        } else {
            return response()->json(['message' => 'Activity not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $activity = Activity::findOrFail($id);

        return view('activities.edit', ['activity' => $activity]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'type' => ['required', 'in:Surf,Windsurf,Kayak,ATV,Hot air baloon'],
            'dateTime' => ['required', 'date'],
            'notes' => ['required', 'string', 'max:200'],
            'satisfaction' => ['required', 'integer', 'between:0,10'],
            'paid' => ['sometimes', 'boolean']
        ]);
        
            $activity = Activity::findOrFail($id);
            $activity->update($validated);

            if ($activity) {
                return response()->json($activity, 200);
            } else {
                return response()->json(['message' => 'Activity not found'], 404);
            }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = Activity::destroy($id);

        if ($deleted) {
            return response()->json(['message' => 'Activity deleted successfully'], 200);
        } else {
            return response()->json(['message' => 'Activity not found'], 404);
        }
    }
}
