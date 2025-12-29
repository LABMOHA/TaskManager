<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasks=Task::with('user')->get();
        return view('tasks.home',compact('tasks'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title'=>'required|max:255',
            'description'=>'required|max:255',
        ]);
        $task=new Task($validatedData);
        $task->save();
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
        return view('tasks.show', ['task'=>$task]);

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
        return view('tasks.edit', ['task'=>$task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
        $validateData=$request->validate([
            'title'=>'required|max:255',
            'description'=>'required|max:255'
        ]);
        $task->update($validateData);
        return redirect('/');
    }
    public function Update_stat(Task $task ,Request $request)
    {
        $task->is_completed=true;
        $task->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
        $task->delete();
        return redirect('/');

    }
}
