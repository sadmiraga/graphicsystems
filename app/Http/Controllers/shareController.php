<?php

namespace App\Http\Controllers;

use App\Models\machine;
use Illuminate\Http\Request;

class shareController extends Controller
{
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
