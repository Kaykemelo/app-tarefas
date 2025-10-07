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
} 
