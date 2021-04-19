<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\machine;
use App\models\picture;
use App\Models\manufacturer;

class machineController extends Controller
{

    public function myReferences()
    {
        $machines = machine::where('sold', true)->paginate(15);
        return view('admin.machines.references')->with('machines', $machines);
    }

    public function sell($machineID)
    {
        $machine = machine::findOrFail($machineID);
        $machine->sold = true;
        $machine->save();

        return redirect('/my-machines')->with("message", "You successfully sold machine, you can find it under the 'references' ");
    }

    public function index()
    {
        $machines = machine::where('sold', false)->paginate(12);
        return view('admin.machines.myMachinesIndex')->with('machines', $machines);
    }

    public function newMachine()
    {

        $categories = category::all();
        $manufacturers = manufacturer::all();
        return view('admin.machines.newMachine')->with('categories', $categories)->with('manufacturers', $manufacturers);
    }

    public function deleteMachine($machineID)
    {

        $machine = machine::findOrFail($machineID);

        //check if user who requested delete is owner of machine
        if ($machine->userID == Auth::id()) {

            //delete all pictures related to this machine
            $pictures = picture::where('machineID', $machineID)->get();
            foreach ($pictures as $picture) {
                $path = public_path() . '/images/machines/' . $picture->image;
                unlink($path);
                $picture->delete();
            }
            $machine->delete();
            return redirect('/my-machines')->with("message", "You successfully deleted listing");
        } else {
            return 'not allowed';
        }
    }

    public function editMachine($machineID)
    {
        $machine = machine::findOrFail($machineID);
        $categories = category::all();
        $manufacturers = manufacturer::all();

        return view('admin.machines.editMachine')->with('categories', $categories)
            ->with('machine', $machine)
            ->with('manufacturers', $manufacturers);
    }

    public function editMachineExe(Request $request)
    {
        $machine = machine::findOrFail($request->input('machineID'));
        $machine->name = $request->input('machineName');
        $machine->price = $request->input('machinePrice');
        $machine->description = $request->input('machineDescription');
        $machine->condition = $request->input('condition');
        $machine->year = $request->input('machineYear');
        $machine->model = $request->input('machineModel');
        $machine->machineType = $request->input('machineType');
        $machine->locationNote = $request->input('locationNote');


        //manufacturer
        if ($request->input('customManufacturer') == null) {
            $machine->manufacturerID = $request->input('manufacturerID');
        } else {
            $manufacturer = new manufacturer();
            $manufacturer->name = $request->input('customManufacturer');
            $manufacturer->save();
            $machine->manufacturerID = $manufacturer->id;
        }

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
        $machine->condition = $request->input('condition');
        $machine->year = $request->input('machineYear');
        $machine->model = $request->input('machineModel');
        $machine->machineType = $request->input('machineType');
        $machine->locationNote = $request->input('locationNote');

        //manufacturer
        if ($request->input('customManufacturer') == null) {
            $machine->manufacturerID = $request->input('manufacturerID');
        } else {
            $manufacturer = new manufacturer();
            $manufacturer->name = $request->input('customManufacturer');
            $manufacturer->save();
            $machine->manufacturerID = $manufacturer->id;
        }


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
