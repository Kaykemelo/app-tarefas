<?php

namespace App\Http\Controllers;

use App\Http\Requests\Task\CreateRequest;
use App\Http\Requests\Task\UpdateRequest;
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

    public function edit($id)
    {
        $task = Task::find($id)->toArray();
    
        return view('Task/edit', ['task' => $task]);
    }

    public function update(UpdateRequest $request, Task $task)
    {
        
        $validated = $request->validated();
    
        $task->update($validated);
    
        return back()->with('sucess', 'Tarefa alterada com sucesso!');
    }
}
