<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $teams=Team::all();
        return view("Task.createTeam",compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $teams=Team::all();

        return view("Team.Teams",compact("teams"));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();

        // Check if the user has reached the team limit
        if ($user->teamCount() >= 5) {
            return redirect()->route('createTeam')
            ->with('error', 'You have reached the maximum limit of 5 teams. Please upgrade to add more teams.');
        }
        $request->validate([
            "name"=>"required",
            "description"=>"required",
        ]);
        
        $team=Team::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "owner_id"=>$user->id
        ]);
        $team->members()->attach($user,["role"=>"Owner"]);
        // dd("succes");
        return back()->with('success', 'Team added successfully!');    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
