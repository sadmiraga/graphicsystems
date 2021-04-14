<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\machine;
use App\models\picture;

class machineController extends Controller
{

    public function index()
    {
        $machines = machine::paginate(10);
        return view('admin.machines.myMachinesIndex')->with('machines', $machines);
    }

    public function newMachine()
    {
        $categories = category::all();
        return view('admin.machines.newMachine')->with('categories', $categories);
    }

    public function editMachine($machineID)
    {
        $machine = machine::findOrFail($machineID);
        $categories = category::all();

        return view('admin.machines.editMachine')->with('categories', $categories)->with('machine', $machine);
    }

    public function editMachineExe(Request $request)
    {
        $machine = machine::findOrFail($request->input('machineID'));
        $machine->name = $request->input('machineName');
        $machine->price = $request->input('machinePrice');
        $machine->description = $request->input('machineDescription');
        $machine->manufacturer = $request->input('machineManufacturer');
        $machine->condition = $request->input('condition');
        $machine->year = $request->input('machineYear');
        $machine->model = $request->input('machineModel');
        $machine->machineType = $request->input('machineType');
        $machine->locationNote = $request->input('locationNote');
        $machine->save();

        return redirect('/my-machines')->with("message", "You successfully updated your listing");
    }

    public function newMachineExe(Request $request)
    {
        //create machine model
        $machine = new machine();

        //owner of machine
        $machine->userID = Auth::id();

        //data
        $machine->name = $request->input('machineName');
        $machine->price = $request->input('machinePrice');
        $machine->description = $request->input('machineDescription');
        $machine->manufacturer = $request->input('machineManufacturer');
        $machine->condition = $request->input('condition');
        $machine->year = $request->input('machineYear');
        $machine->model = $request->input('machineModel');
        $machine->machineType = $request->input('machineType');
        $machine->locationNote = $request->input('locationNote');

        //add youtube link
        if ($request->input('youtubeLink') != null) {
            $youtubeKey = $this->youtubeID($request->input('youtubeLink'));
            $machine->youtubeLink = $youtubeKey;
        }

        $machine->categoryID = $request->input('categoryID');
        $machine->save();

        //add IMAGES related to added machine
        $images = $request->file('machineImages');
        if ($request->hasFile('machineImages')) {
            foreach ($images as $item) {
                $var = date_create();
                $time = date_format($var, 'YmdHis');
                $imageName = $time . '-' . $item->getClientOriginalName();
                $item->move(public_path('images/machines'), $imageName);

                $imageModel = new picture();
                $imageModel->machineID = $machine->id;
                $imageModel->image = $imageName;
                $imageModel->save();
            }
        }
        return redirect('/my-machines')->with("message", "You successfully added new machine to your listings");
    }
}
