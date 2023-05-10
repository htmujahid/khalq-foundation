<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectDonation;
use Illuminate\Http\Request;

class ProjectDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.projectdonations', ['donations'=>ProjectDonation::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.projectdonations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation = new ProjectDonation;
        $donation->project_id = $request->input('project-id');
        $donation->donor_id = $request->input('donor-id');
        $donation->amount = $request->input('amount');
        $donation->account_number = $request->input('account');
        $donation->save();
        return redirect('/admin/project-donations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return redirect('/admin/project-donations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = ProjectDonation::find($id);
        return view('admin.update.projectdonations', ['donation'=>$donation, 'id'=> $id]);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $donation = ProjectDonation::find($id);
        $donation->project_id = $request->input('project-id');
        $donation->donor_id = $request->input('donor-id');
        $donation->amount = $request->input('amount');
        $donation->account_number = $request->input('account');
        $donation->save();
        return redirect('/admin/project-donations');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = ProjectDonation::find($id);
        $donation->delete();
        return redirect('/admin/project-donations');
    }
}
