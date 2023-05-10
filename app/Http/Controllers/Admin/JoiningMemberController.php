<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JoiningMember;
use Illuminate\Http\Request;

class JoiningMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.joiningmembers', ['joiningmembers'=>JoiningMember::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JoiningMember  $joiningMember
     * @return \Illuminate\Http\Response
     */
    public function show(JoiningMember $joiningMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JoiningMember  $joiningMember
     * @return \Illuminate\Http\Response
     */
    public function edit(JoiningMember $joiningMember)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JoiningMember  $joiningMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JoiningMember $joiningMember)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JoiningMember  $joiningMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(JoiningMember $joiningMember)
    {
        //
    }
}
