<?php

namespace App\Http\Controllers;

use App\Models\Costumers;
use Illuminate\Http\Request;

class CostumersController extends Controller
{
    public function index()
    {
        $aCostumer = Costumers::with('address')->get();

        return view('costumer/index', compact('aCostumer')); 
    }

    public function showNotes($id)
    {
        $costumerNotes = Costumers::with('notes')->find($id);

        return view('costumer/notes', compact('costumerNotes'));
    }

    public function getShowTools($id)
    {
        $costumerTools = Costumers::with('tools')->find($id);

        return view('costumer/tools', compact('costumerTools'));
    }
} 
