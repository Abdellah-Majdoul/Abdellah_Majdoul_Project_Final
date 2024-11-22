<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Tasks = Task::where('user_id', Auth::id())->get();
        return view("Task.showtask",compact("Tasks"));

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
    public function store(Request $request)
    {
        
        $request->validate([
            "name"=>"required",
            "description"=>"required",
            "start"=>"required",
            "end"=>"required",
            "priority"=>"required",  
        ]);
        $user = auth()->user();
        $task=Task::create([
            "name"=>$request->name,
            "description"=>$request->description,
            "start"=>$request->start,
            "end"=>$request->end,
            "priority"=>$request->priority,
            "user_id"=>$user->id
        ]);
        // dd($task);
        return redirect()->back()->with('task', 'Task created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return back();
    }
}
