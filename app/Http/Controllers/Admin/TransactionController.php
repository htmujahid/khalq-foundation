<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseDonation;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(){
        return view('admin.transactions', ['donations'=>CaseDonation::orderBy('id','DESC')->get()]);
    }
}
