<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Exception;

class TaskController extends Controller
{
    public function index() 
    {

        $aTasks = Task::all()->toArray();
        
        //dd($aTasks);
        return view('Task/index', ['aTasks' => $aTasks]);
    }

    public function show($id) 
    {
        $task = Task::where('id', $id)->get()->toArray();
        //dd($task);

        return view('taskbyid', ['task' => $task]); 
        
    }

    public function create()
    {
        return view('Task/create');
    }

    public function store(CreateRequest $request)
    {
        
            $validated = $request->validated();

            Task::create($validated); 

            return back()->with('sucess', 'Tarefa criada com sucesso!');

    }

}
