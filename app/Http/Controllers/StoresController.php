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

    public function showNotes($id)
    {
        $storeNotes = Stores::with('notes')->find($id);

        return view('store/notes', compact('storeNotes'));
    }
}
