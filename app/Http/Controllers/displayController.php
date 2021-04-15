<?php

namespace App\Http\Controllers;

use App\Models\manufacturer;
use App\Models\machine;
use App\Models\category;
use Illuminate\Http\Request;

class displayController extends Controller
{
    public function showMachinesBy($categoryID, $manufacturerID)
    {
        $manufactures = manufacturer::all();
        $categories = category::all();

        //NO CATEGORY and NO MANUFACTURER
        if ($categoryID == 0 and  $manufacturerID == 0) {
            $machines = machine::where('sold', false)->paginate(15);

            //only CATEGORY
        } else if ($categoryID != 0 and $manufacturerID == 0) {
            $machines = machine::where('sold', false)->where('categoryID', $categoryID)->paginate(15);

            //only MANUFACTURER
        } else if ($categoryID == 0 and $manufacturerID != 0) {
            $machines = machine::where('sold', false)->where('manufacturerID', $manufacturerID)->paginate(15);

            //MANUFACTURER AND CATEGORY
        } else {
            $machines = machine::where('sold', false)->where('categoryID', $categoryID)
                ->where('manufacturerID', $manufacturerID)->paginate(15);
        }




        return view('showMachinesBy')->with('categories', $categories)
            ->with('machines', $machines)
            ->with('manufactures', $manufactures);
    }
}
