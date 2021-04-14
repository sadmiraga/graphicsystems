<?php

namespace App\Http\Controllers;

use App\Models\picture;
use App\Models\machine;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class pictureController extends Controller
{

    public function removeVideo($machineID)
    {
        $machine = machine::findOrFail($machineID);

        if ($machine->userID == Auth::id()) {
            $machine->youtubeLink = null;
            $machine->save();
        } else {
            return "you don't have access for this action";
        }


        return redirect()->back();
    }


    public function updateYoutueVideo(Request $request)
    {
        $url = $this->youtubeID($request->input('YoutubeLink'));
        $machine = machine::findOrFail($request->input('machineID'));

        if ($machine->userID == Auth::id()) {
            $machine->youtubeLink = $url;
            $machine->save();
        } else {
            return "You don't have access for this action";
        }

        return redirect()->back();
    }

    public function editMachineImages($machineID)
    {

        $pictures = picture::where('machineID', $machineID)->get();
        $machine = machine::findOrFail($machineID);

        return view('admin.images.editMachineImages')->with('machineID', $machineID)
            ->with('machine', $machine)
            ->with('pictures', $pictures);
    }

    public function deleteImage($machineID, $pictureID)
    {
        //check if user who requested delete is owner of machine or picture
        $machine = machine::findOrFail($machineID);

        if ($machine->userID == Auth::id()) {

            $pictureCount = picture::where('machineID', $machine->id)->count();


            if ($pictureCount - 1 == 0) {
                return redirect()->back()->with("error", "You can't delete all pictures from your post");
            } else {
                $picture = picture::findOrFail($pictureID);
                $path = public_path() . '/images/machines/' . $picture->image;
                unlink($path);
                $picture->delete();
                return redirect('edit-machine-images/' . $machineID)->with("message", "You successfully deleted image");
            }
        } else {
            return 'not allowed';
        }
    }

    //add images
    public function addImage(Request $request)
    {

        //check if user is owner of pictures
        $machine = machine::findOrFail($request->input('machineID'));

        if ($machine->userID == Auth::id()) {

            //add IMAGES
            $images = $request->file('files');
            if ($request->hasFile('files')) {
                foreach ($images as $item) {

                    //set name and move file
                    $var = date_create();
                    $time = date_format($var, 'YmdHis');
                    $imageName =  $time . $item->getClientOriginalName();

                    $item->move(public_path('images/machines'), $imageName);

                    //add image to database
                    $imageModel = new picture();
                    $imageModel->machineID = $machine->id;
                    $imageModel->image = $imageName;
                    $imageModel->save();
                }
            }

            return redirect('edit-machine-images/' . $machine->id)->with("message", "You successfully added image");
        } else {
            return 'not allowed';
        }
    }
}
