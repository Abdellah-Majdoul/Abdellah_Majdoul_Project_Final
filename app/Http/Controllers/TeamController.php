<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Price;
use Stripe\Stripe;
use Termwind\Components\Dd;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    $users=User::all();  

         // Merge the collections
        $tasks = Task::where('status', 'Pending')
        ->where('user_id', auth()->id())
        ->get();
        $taskspending = Task::where('status', 'In_progress')
        ->where('user_id', auth()->id())
        ->get();
        $tasksDone = Task::where('status', 'Done')
        ->where('user_id', auth()->id())
        ->get();
        return view("Task.createTeam",compact("users","tasks","taskspending","tasksDone"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // $teams=Team::all();
        $user = auth()->user();
        $teamsSS = Team::where("owner_id", $user->id); 
        $teams2 = Team::whereIn("id", $user->teams->pluck("id")); // Use get() to return a collection
        $teams = $teamsSS->union($teams2)->paginate(4);
        return view("Team.Teams",compact("teams"));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = auth()->user();

        if (!$user->haspayment() && $user->teamCount() >= 5) {
            return redirect()->route('payment')
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
        return back()->with('success', 'Team added successfully!');    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
        return view("Task.showTaskTeam",compact("team"));
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
        $team->delete();
        return back();
    }
    public function checkOut()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $user = auth()->user();
        $prices = Price::all();

        $checkout_session = Session::create([
            'customer' => $user->stripe_customer_id, // Use the user's Stripe customer ID
            'line_items' => [[
                'price' => $prices->data[0]->id,
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route("payment.succes"),
            'cancel_url' => route("createTeam"),
        ]);

        return redirect()->away($checkout_session->url);

    }

    public function payment()
    {
        $user = User::where("id",auth()->user()->id)->first();
        if ($user) {
            // dd("wwwwwwwwwwwwwww");
            $user->status = "active";
            $user->save();
        }
    
        return redirect()->route("createTeam")->with('success', 'Your payment was successful, and your status is now active.');
    }
    
}
