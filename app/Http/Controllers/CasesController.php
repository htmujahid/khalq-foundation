<?php

namespace App\Http\Controllers;

use App\Models\Cases;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    public function index(){
        return view('cases', ['cases'=>Cases::orderBy('id','DESC')->get()]);
    }
}
