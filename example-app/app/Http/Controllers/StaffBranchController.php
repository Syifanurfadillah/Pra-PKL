<?php

namespace App\Http\Controllers;
use App\Models\StaffBranch;
use Illuminate\Http\Request;

class StaffBranchController extends Controller
{
    public function index(){
        $staffbranch = StaffBranch::all();
        return view('staffbranch.index', compact('staffbranch'));
    }
}
