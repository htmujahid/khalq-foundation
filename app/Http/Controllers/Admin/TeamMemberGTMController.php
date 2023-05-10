<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\TeamMemberGTM;
use Illuminate\Http\Request;

class TeamMemberGTMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teammembersgtm', ['teammembersgtm'=>TeamMember::where('type','gtm')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.teammembersgtm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teammember = new TeamMember;
        $teammembergtm = new TeamMemberGTM;
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "gtm";   
        $teammember->save();
        $teammembergtm->designation = $request->input('designation');
        $teammembergtm->portfolio = $request->input('portfolio');
        $teammember->team_member_gtm()->save($teammembergtm);
        return redirect('/admin/team-members/gtm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMemberGTM  $teamMemberGTM
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMemberGTM $teamMemberGTM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMemberGTM  $teamMemberGTM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teammember = TeamMember::find($id);
        return view('admin.update.teammembersgtm', ['teammember'=>$teammember, 'id'=> $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMemberGTM  $teamMemberGTM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teammember = TeamMember::find($id);
        $teammembergtm = TeamMemberGTM::where('member_id', $id)->first();
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "gtm";   
        $teammember->save();
        $teammembergtm->designation = $request->input('designation');
        $teammembergtm->portfolio = $request->input('portfolio');
        $teammember->team_member_gtm()->save($teammembergtm);
        return redirect('/admin/team-members/gtm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMemberGTM  $teamMemberGTM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teammember = TeamMember::find($id);
        $teammember->delete();
        $teammembergtm = TeamMemberGTM::where('member_id', $id)->get();
        $teammembergtm->each->delete();
        return redirect('/admin/team-members/gtm');    
    }
}
