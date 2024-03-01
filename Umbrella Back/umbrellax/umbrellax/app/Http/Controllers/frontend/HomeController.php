<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Sendmessage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');

    }

    public function sendMessage(Request $request){
           $create = new Sendmessage();
            $create->name = $request->name;
            $create->email = $request->email;
            $create->tel = $request->tel;
            $create->message = $request->message;
            $create->save();
            return redirect()->back()->with('flash_message_success','Message added successfully');

    }

}
