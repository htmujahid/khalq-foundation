<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\TeamMemberCA;
use Illuminate\Http\Request;

class TeamMemberCAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.teammembersca', ['teammembersca'=>TeamMember::where('type','ca')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.teammembersca');
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
        $teammemberca = new TeamMemberCA;
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "ca";   
        $teammember->save();
        $teammemberca->member_id = TeamMember::select('id')->max('id');
        $teammemberca->campus = $request->input('company');
        $teammember->team_member_gtm()->save($teammemberca);        
        return redirect('/admin/team-members/ca');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamMemberCA  $teamMemberCA
     * @return \Illuminate\Http\Response
     */
    public function show(TeamMemberCA $teamMemberCA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamMemberCA  $teamMemberCA
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teammember = TeamMember::find($id);
        return view('admin.update.teammembersca', ['teammember'=>$teammember, 'id'=> $id]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TeamMemberCA  $teamMemberCA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teammember = TeamMember::find($id);
        $teammemberca = TeamMemberCA::where('member_id', $id)->first();
        $teammember->name = $request->input('name');   
        $teammember->gender = $request->input('gender');   
        $teammember->contact = $request->input('contact');   
        $teammember->email = $request->input('email');   
        $teammember->address = $request->input('address');   
        $teammember->company = $request->input('company');   
        $teammember->department = $request->input('department');   
        $teammember->title = $request->input('title');   
        $teammember->type = "ca";   
        $teammember->save();
        $teammemberca->member_id = TeamMember::select('id')->max('id');
        $teammemberca->campus = $request->input('company');
        $teammember->team_member_gtm()->save($teammemberca);         
        return redirect('/admin/team-members/ca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamMemberCA  $teamMemberCA
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teammember = TeamMember::find($id);
        $teammemberca = TeamMemberCA::where('member_id', $id)->get();
        $teammember->delete();
        $teammemberca->each->delete();
        return redirect('/admin/team-members/ca');    
    }

}
