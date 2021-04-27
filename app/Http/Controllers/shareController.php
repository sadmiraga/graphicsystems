<?php

namespace App\Http\Controllers;

use App\Models\machine;
use App\Models\subscriber;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Mail;
use App\Mail\inquiryMailer;

class shareController extends Controller
{

    public function sendMachineInquiry(Request $request)
    {

        $machine = machine::findOrFail($request->input('machineID'));
        $machine->inquiries = $machine->inquiries + 1;
        $machine->save();

        $email = $request->input('email');
        $companyName = $request->input('companyName');
        $fullName = $request->input('firstName') . ' ' . $request->input('lastName');
        $phone = $request->input('phone');
        $website = $request->input('website');
        $emailMessage = $request->input('userMessage');

        Mail::to(env("DOMAIN_EMAIL"))->send(new inquiryMailer($machine, $email, $companyName, $fullName, $phone, $website, $emailMessage));

        return $request->all();
    }

    public function newsletter()
    {
        $machines = machine::where('sold', false)->get();
        return view('admin.newsletter.newsletter')->with('machines', $machines);
    }

    public function sendNewsletter(Request $request)
    {
        $selectedIDs = $request->input('selectedMachines');

        if ($selectedIDs == null) {
            return redirect()->back()->with("error", "You didn't choose any machine");
        }

        //convert IDs to array
        $selectedMachines = explode(",", $selectedIDs);

        //get all machine records
        $machines = machine::whereIn('id', $selectedMachines)->get();

        //get subscribers
        $subscribers = subscriber::all();

        return $subscribers;
    }

    //design and additional form for sharing machine on machinerydepo
    public function shareMachine($machineID)
    {
        $machine = machine::findOrFail($machineID);

        //get locations from MACHINERYDEPO
        $client = new \GuzzleHttp\Client();
        $res = $client->get('http://machinerydepo.com/api/getCategories');
        $content = $res->getBody();
        $categories = json_decode($content);

        //get categories from MACHINERYDEPO
        $client = new \GuzzleHttp\Client();
        $res = $client->get('http://machinerydepo.com/api/getLocations');
        $content = $res->getBody();
        $locations = json_decode($content);


        return view('admin.newsletter.shareMachine')->with('categories', $categories)
            ->with('locations', $locations)
            ->with('machine', $machine);
    }


    public function shareMachineExe(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $res = $client->request('POST', 'http://machinerydepo.com/api/shareMachine', [
            'form_params' => [
                'name' => 'sadmir',
                'id' => '1',
            ]
        ]);

        return $res;
    }
}
