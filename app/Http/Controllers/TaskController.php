<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() 
    {

        $aTasks = Task::all()->toArray();
        
        //dd($aTasks);
        return view('tasks', ['aTasks' => $aTasks]);
    }

    public function show($id) 
    {
        $task = Task::where('id', $id)->get()->toArray();
        //dd($task);

        return view('taskbyid', ['task' => $task]); 
        
    }

    public function create()
    {
        return view('taskcreate');
    }

    public function store(CreateRequest $request)
    {
        
        $validated = $request->validated();
        
        Task::create($validated); 

        return back(); 
    }

}
