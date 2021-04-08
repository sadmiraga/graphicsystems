<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoriesController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('admin.categoriesIndex')->with('categories', $categories);
    }

    public function addCategory(Request $request)
    {
        $category = new category();
        $category->name = $request->input('categoryName');
        $category->save();
        return redirect()->back()->with('message', 'You successfully added new category');
    }
}
