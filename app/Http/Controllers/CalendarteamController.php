<?php

namespace App\Http\Controllers;

use App\Models\Calendarteam;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarteamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("calendar.calendarTeam");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    // Eager load tasks and the owner for each team
    $teams = Team::with(['tasks', 'userrs'])->get();
    $formattedTeams = $teams->map(function ($team) {
        return [
            "id" => $team->id,
            "start" => $team->start,
            "end" => $team->end,
            "owner" => $team->user_id,
            "color" => "#1e2b37",
            "passed" => false,
            "title" => $team->user ? $team->user->name : "Unknown User",
            "tasks" => $team->tasks->map(function ($task) {
                return [
                    "id" => $task->id,
                    "title" => $task->title,
                    "status" => $task->status,
                    "description" => $task->description,
                ];
            }),
        ];
    });

    return response()->json([
        "teams" => $formattedTeams
    ]);
}

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "start" => "required|date",
            "end" => "required|date"
        ]);

        Calendarteam::create([
            "start" => $request->start,
            "end" => $request->end,
            "user_id" => Auth::user()->id
        ]);

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendarteam $calendarteam)
    {
        $request->validate([
            "start" => "required|date",
            "end" => "required|date"
        ]);

        $calendarteam->update([
            "start" => $request->start,
            "end" => $request->end
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendarteam $calendarteam)
    {
        $calendarteam->delete();
        return back();
    }
}
