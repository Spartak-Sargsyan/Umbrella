<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Sendmessage;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function index(){
        $sendMaessages = Sendmessage::paginate(10);
        return view('admin.send-message',['sendMaessages'=>$sendMaessages]);
    }
}
