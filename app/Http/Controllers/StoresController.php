<?php

namespace App\Http\Controllers;

use App\Models\Stores;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function index()
    {
        $aStores = Stores::with('address')->get();

        return view('store/index', compact('aStores'));
    }
}
