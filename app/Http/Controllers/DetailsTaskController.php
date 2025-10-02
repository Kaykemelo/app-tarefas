<?php

namespace App\Http\Controllers;

use App\Models\DetailsTask;
use Illuminate\Http\Request;

class DetailsTaskController extends Controller
{
    public function show($id)
    {
        $aDetails = DetailsTask::with('task')->find($id)->toArray();
        return view('details/show', ['aDetails' => [$aDetails]]);
    }
}
