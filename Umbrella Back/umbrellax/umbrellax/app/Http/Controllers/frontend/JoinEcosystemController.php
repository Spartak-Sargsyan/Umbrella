<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\JoinEcosystem;
use Illuminate\Http\Request;

class JoinEcosystemController extends Controller

{
    public function index(){
        return view('frontend.joinecosystem');
    }

    public function register(Request $request){
        $create = new JoinEcosystem();
        $create->name= $request->name;
        $create->course= $request->course;
        $create->email= $request->email;
        $create->tell= $request->tell;
        $create->date= $request->date;
        $create->country= $request->country;
        $create->city= $request->city;
        $create->save();
        return redirect()->back()->with('flash_message_success','Join Ecosystem added successfully');

    }
}

