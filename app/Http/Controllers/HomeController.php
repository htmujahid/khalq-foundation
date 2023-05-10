<?php

namespace App\Http\Controllers;
use App\Models\Newsletter;
use App\Models\Cases;
use App\Models\Project;
use App\Models\CaseDonation;
use App\Models\ProjectDonation;
use App\Models\Review;
use App\Models\Donor;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $case_count = Cases::count();
        $donor_count = Donor::count();
        $donation_count = CaseDonation::sum('amount') + ProjectDonation::sum('amount');    

        $case_description = Cases::where('status','continue')->first(); 
        if($case_description == null) 
        $case_description = Cases::get()->last(); 
        $project_description = Project::orderBy('id', 'desc')->limit(4)->get();    

        $review = Review::all();
        return view('index', compact('case_count', 'donor_count', 'donation_count', 'case_description', 'project_description', 'review'));
    }

    public function newsletter(Request $request){
        $newsletter = new Newsletter;
        $newsletter->email = $request->input('email');
        $newsletter->save();
        return redirect('/');
    }
}
