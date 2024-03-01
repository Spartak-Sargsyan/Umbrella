<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\JoinEcosystem;
use Illuminate\Http\Request;

class JoinEcosystemController extends Controller
{
    public function index(){
        $joinEcosystems = JoinEcosystem::paginate(10);
        return view('admin.join_ecosystem',['joinEcosystems'=>$joinEcosystems]);
    }
}
