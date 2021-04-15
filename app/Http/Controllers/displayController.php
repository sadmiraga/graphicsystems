<?php

namespace App\Http\Controllers;

use App\Models\manufacturer;
use App\Models\machine;
use App\Models\category;
use App\Models\picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class displayController extends Controller
{

    public function customIndex()
    {
        $machines = machine::where('sold', false)->orderByDesc('created_at')->take(8)->get();
        return view('index')->with('machines', $machines);
    }

    public function showMachine($machineID)
    {
        $machine = machine::findOrFail($machineID);
        $pictures = picture::where('machineID', $machineID)->get();
        $manufacturer = manufacturer::findOrFail($machine->manufacturerID);

        return view('showMachine')->with('machine', $machine)
            ->with('pictures', $pictures)
            ->with('manufacturer', $manufacturer);
    }

    public function references()
    {
        $machines = machine::where('sold', true)->get();
        return view('references')->with('machines', $machines);
    }


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




        return view('stocklist')->with('categories', $categories)
            ->with('machines', $machines)
            ->with('manufactures', $manufactures);
    }
}
