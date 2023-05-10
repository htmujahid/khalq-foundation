<?php

namespace App\Http\Controllers\Admin;

use App\Models\Cases;
use App\Models\Project;
use App\Models\CaseDonation;
use App\Models\ProjectDonation;
use App\Models\Donor;
use App\Models\TeamMember;
use App\Models\JoiningMember;
use App\Models\Review;
use App\Models\Contact;
use App\Models\Newsletter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $current_case = Cases::all()->last();
        $cases = Cases::all();
        $project = Project::all();
        $case_donation = CaseDonation::all();
        $project_donation = ProjectDonation::all();
        $donor = Donor::all();
        $teammember = TeamMember::all();
        $joiningmember = JoiningMember::all();
        $review = Review::all();
        $contact = Contact::all();
        $newsletter = Newsletter::all();
        return view('admin.index', compact('current_case', 'cases', 'project', 'case_donation', 'project_donation', 'donor', 'teammember', 'joiningmember', 'review', 'contact', 'newsletter'));
    }
}
