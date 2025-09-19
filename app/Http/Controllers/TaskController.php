<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() 
    {

        $aTasks = Task::all();
        
        dd($aTasks);
        return view('tasks', $aTasks);
    }

    public function show($id) 
    {
        $task = Task::where('id', $id)->get()->toArray();
        dd($task);

        return view('taskbyid', $task); 
        
    }
}
