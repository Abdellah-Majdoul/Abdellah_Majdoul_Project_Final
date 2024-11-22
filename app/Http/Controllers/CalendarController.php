<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPSTORM_META\map;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("calendar.calendar");
    } 
 
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
  
    $tasks = Task::all();
    $events = $tasks->map(function ($task) {
        $nameUser = User::find($task->user_id); // Fetch user by ID
    
        return [
            "id" => $task->id,
            "start" => $task->start,
            "end" => $task->end,
            "owner" => $task->user_id,
            "color" => "#1e2b37",
            "passed" => false,
            "title" => $nameUser ? $nameUser->name : "Unknown User", // Handle cases where the user might not exist
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
        //
       

        $request->validate([
            "start" => "required",
            "end" => "required"
        ]);

        Calendar::create([
            "start" => $request->start . ":00",
            "end" => $request->end . ":00",
            "user_id" => Auth::user()->id
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Calendar $calendar)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Calendar $calendar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Calendar $calendar)
    {
        //
        $request->validate([
            "start" => "required",
            "end" => "required"
        ]);

        $calendar->update([
            "start" => $request->start ,
            "end" => $request->end
        ]);

        return back();
        // dd("jkh");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Calendar $calendar)
    {
        //

        $calendar->delete();
        return back();
    }
}