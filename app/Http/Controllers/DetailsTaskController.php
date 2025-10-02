<?php

namespace App\Http\Controllers;

use App\Http\Requests\Details\DetailsTaskRequest;
use App\Http\Requests\Details\UpdateDetailsRequest;
use App\Models\DetailsTask;
use App\Models\Task;
use Illuminate\Http\Request;

class DetailsTaskController extends Controller
{
    public function show($id)
    {
        $aDetails = DetailsTask::with('task')->find($id)->toArray();

        return view('details/show', ['aDetails' => $aDetails]);
    }

    public function create($taskid)
    {
        $task = Task::findOrFail($taskid)->toArray();
        return view('details/create', ['task' => $task]);
    }

    public function store(DetailsTaskRequest $request)
    {
        $detailsTask = $request->validated();
        
        DetailsTask::create($detailsTask);

        return back()->with('success', 'Detalhe da tarefa criado com sucesso!');
    }

    public function edit($detailsid)
    {
        $details = DetailsTask::with('task')->findOrFail($detailsid)->toArray();
        return view('details/edit', ['details' => $details]);
    }

    public function update(UpdateDetailsRequest $request , DetailsTask $details)
    {
        $detailsTask = $request->validated();

        $details->update($detailsTask);
        
        return back()->with('success', 'Detalhe da Tarefa alterado com sucesso!');
    }
}
