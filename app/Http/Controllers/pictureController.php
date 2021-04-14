<?php

namespace App\Http\Controllers;

use App\Models\picture;
use App\Models\machine;

use Illuminate\Http\Request;

class pictureController extends Controller
{

    public function editMachineImages($machineID)
    {

        $pictures = picture::where('machineID', $machineID)->get();
        $machine = machine::findOrFail($machineID);

        return view('admin.images.editMachineImages')->with('machineID', $machineID)
            ->with('machine', $machine)
            ->with('pictures', $pictures);
    }
}
