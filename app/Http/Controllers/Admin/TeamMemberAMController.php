<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\TeamMemberAM;
use Illuminate\Http\Request;

class TeamMemberAMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teammembersam', ['teammembersam'=>TeamMember::where('type','am')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.teammembersam');
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
        $teammemberam = new TeamMemberAM;
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "am";   
        $teammember->save();
        $teammemberam->member_id = TeamMember::select('id')->max('id');
        $teammemberam->area = $request->input('area');
        $teammember->team_member_gtm()->save($teammemberam);
        return redirect('/admin/team-members/am');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMemberAM  $teamMemberAM
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMemberAM $teamMemberAM)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMemberAM  $teamMemberAM
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teammember = TeamMember::find($id);
        $teammemberam = TeamMemberAM::where('member_id', $id)->first();
        return view('admin.update.teammembersam', ['teammember'=>$teammember, 'teammemberam'=>$teammemberam, 'id'=> $id]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMemberAM  $teamMemberAM
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teammember = TeamMember::find($id);
        $teammemberam = TeamMemberAM::where('member_id', $id)->first();
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "am";   
        $teammember->save();
        $teammemberam->member_id = TeamMember::select('id')->max('id');
        $teammemberam->area = $request->input('area');
        $teammember->team_member_gtm()->save($teammemberam);
        return redirect('/admin/team-members/am');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMemberAM  $teamMemberAM
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teammember = TeamMember::find($id);
        $teammemberam = TeamMemberAM::where('member_id', $id)->get();
        $teammember->delete();
        $teammemberam->each->delete();
        return redirect('/admin/team-members/am');    
    }

}
