<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscriber;

class adminController extends Controller
{

    //add subscriber from footer
    public function newSubscriber($type, $email)
    {
        $subscriber = new subscriber();
        $subscriber->type = $type;
        $subscriber->email = $email;
        $subscriber->save();
        return redirect()->back()->with("message", "From now on you will never miss out on news about our machines");
    }

    public function subscribers()
    {
        $subscribers = subscriber::paginate(15);
        return view('admin.newsletter.subscribers')->with('subscribers', $subscribers);
    }

    public function deleteSubscriber($subscriberID)
    {
        $subscriber = subscriber::findOrFail($subscriberID);
        $subscriber->delete();
        return redirect()->back()->with("message", "You successfully deleted subscriber");
    }


    public function dashboard()
    {
        return 'admin';
    }

    public function test()
    {
        return view('layouts.adminDashboard');
    }
}
