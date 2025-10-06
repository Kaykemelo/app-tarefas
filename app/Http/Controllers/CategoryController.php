<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();

        $categorys->load('tasks');

        return view('categorys/index', [ 'categorys' => $categorys]);
    }


    public function categoryDetail()
    {
        $categoryDetail = Category::with('details')->get();

        return view('categorys/details', compact('categoryDetail'));
    }

    public function detailsCategory()
    {
        $detailsCategory = Category::with('DetailsThroughTasks')->get();

        return view('categorys/many-details', compact('detailsCategory'));
    }
}
