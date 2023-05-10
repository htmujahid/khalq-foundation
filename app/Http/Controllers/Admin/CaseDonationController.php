<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CaseDonation;
use Illuminate\Http\Request;

class CaseDonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.casedonations', ['donations'=>CaseDonation::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.casedonations');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donation = new CaseDonation;
        $donation->case_id = $request->input('case-id');
        $donation->donor_id = $request->input('donor-id');
        $donation->amount = $request->input('amount');
        $donation->account_number = $request->input('account');
        $donation->save();
        return redirect('/admin/case-donations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        return redirect('/admin/case-donations');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donation = CaseDonation::find($id);
        return view('admin.update.casedonations', ['donation'=>$donation, 'id'=> $id]);    
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
        $donation = CaseDonation::find($id);
        $donation->case_id = $request->input('case-id');
        $donation->donor_id = $request->input('donor-id');
        $donation->amount = $request->input('amount');
        $donation->account_number = $request->input('account');
        $donation->save();
        return redirect('/admin/case-donations');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donation = CaseDonation::find($id);
        $donation->delete();
        return redirect('/admin/case-donations');
    }
}
