<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categoriesController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('admin.categories.categoriesIndex')->with('categories', $categories);
    }

    public function addCategory(Request $request)
    {
        $category = new category();
        $category->name = $request->input('categoryName');
        $category->save();
        return redirect()->back()->with('message', 'You successfully added new category');
    }

    //delete category
    public function deleteCategory($categoryID)
    {
        //find category
        $category = category::find($categoryID);
        //delete category
        $category->delete();
        return redirect()->back()->with("message", "You successfully deleted category");
    }

    public function editCategoryIndex($categoryID)
    {
        $category = category::find($categoryID);
        return view('admin.categories.editCategory')->with('category', $category);
    }

    public function editCategoryExe(Request $request)
    {



        $category = category::find($request->input('categoryID'));

        $category->name = $request->input('categoryName');


        $category->save();
        return redirect('/categories')->with("message", "You successfully update category");
    }
}
