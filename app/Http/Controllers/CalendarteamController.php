<?php

namespace App\Http\Controllers;

use App\Models\Calendarteam;
use App\Models\Task;
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
        //
        $user = auth()->user();
        // $events = Task::where('creator_id', $user->id)->get();
        $events = Task::whereIn('team_id', $user->teams->pluck('id'))->get();
        $events = $events->map(function ($e) {
            $user = User::where("id", $e->user_id)->first();
            return [
                "id" => $e->id,
                "start" => $e->start,
                "end" => $e->end,
                "owner" => $e->user_id,
                "color" => "#1c1c1c",
                "passed" => false,
                "title" => "Course : $e->name",
                "name" => $e->name,
                "description" => $e->description,
                "places" => $e->places,
                "start_time" => $e->start,
                "end_time" => $e->end,
            ];
        });

        return response()->json([
            "events" => $events
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
