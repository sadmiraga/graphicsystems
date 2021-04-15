<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\machine;

class searchController extends Controller
{
    //admin panel SEARCH
    public function searchMyMachines($query)
    {


        $queryValues = preg_split('/\s+/', $query, -1, PREG_SPLIT_NO_EMPTY);

        $machines = machine::where('sold', false)->where(function ($q) use ($queryValues) {
            foreach ($queryValues as $value) {
                $q->orWhere('name', 'like', "%$value%")
                    ->orWhere('description', 'like', "%$value%")
                    ->orWhere('model', 'like', "%$value%")
                    ->orWhere('locationNote', 'like', "%$value%")
                    ->orWhere('machineType', 'like', "%$value%");
            }
        })->paginate(15);

        return view('admin.machines.myMachinesIndex')->with('machines', $machines);
    }
}
