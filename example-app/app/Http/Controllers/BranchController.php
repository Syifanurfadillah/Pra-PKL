<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index(){
        $branch = Staff::all();
        return view('staffbranch.index', compact('branch'));
    }
}
