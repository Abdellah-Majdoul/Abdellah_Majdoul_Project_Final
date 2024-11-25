<?php

namespace App\Http\Controllers;

use App\Mail\InvitationMailer;
use App\Models\Invitation;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Team $teamId)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        // Fetch the team
        $team = Team::find($teamId->id);
        $user = auth()->user();
        // dd($team);
        if (!$team) {
            return back()->with('error', 'User not found.');
        }
    
        if ($team->owner_id === $user->id && $request->email === $user->email) {
            return back()->with('error', "You can't invite yourself.");
        }
    
        $existingMember = $team->members()->where('email', $request->email)->exists();
        if ($existingMember) {
            return back()->with('error', "This user is already a member of the team.");
        }
    
        $invitation = Invitation::create([
            'team_id' => $team->id,
            'email' => $request->email,
            'invited_by' => $user->id,
        ]);
    
        Mail::to($request->email)->send(new InvitationMailer($invitation));
    
        return back()->with('success', 'Invitation sent successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Invitation $invitation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invitation $invitation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invitation $invitation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invitation $invitation)
    {
        //
    }
    public function accept($id)
    {
        $invitation = Invitation::where('id' , $id)->first();

        if ($invitation->status !== 'Pending') {
            return response()->json(['message' => 'This invitation is no longer valid.'], 400);
        }

        $user = User::firstOrCreate(['email' => $invitation->email]);

        $team = Team::where('id' , $invitation->team_id)->first();
        $team->members()->attach($user, ['role' => 'Member']);

        $invitation->update(['status' => 'Accepted']);

        return response()->json(['message' => 'You have successfully joined the team.']);
    }


    public function reject($id)
    {
        $invitation = Invitation::where('id', $id)->first();

        // Check if the invitation is still pending
        if ($invitation->status !== 'Pending') {
            return response()->json(['message' => 'This invitation is no longer valid.'], 400);
        }

        // Update the invitation status
        $invitation->update(['status' => 'Rejected']);

        return response()->json(['message' => 'You have rejected the invitation.']);
    }
}
