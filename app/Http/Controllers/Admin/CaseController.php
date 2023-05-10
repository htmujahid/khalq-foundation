<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Http\Request;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cases', ['cases'=>Cases::orderBy('id','DESC')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.cases');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $case = new Cases;
        $case->needy_name = $request->input('name');
        $case->needy_contact = $request->input('contact');
        $case->needy_address = $request->input('address');
        $case->title = $request->input('title');
        $case->amount = $request->input('amount');
        $case->category = $request->input('category');
        $case->status = $request->input('status');
        $case->image = $request->input('image');
        $case->description = $request->input('description');
        $case->save();
        return redirect('/admin/cases');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function show(Cases $cases)
    {
        return redirect('/admin/cases');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case = Cases::find($id);
        return view('admin.update.cases', ['case'=>$case, 'id'=> $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $case = Cases::find($id);
        $case->needy_name = $request->input('name');
        $case->needy_contact = $request->input('contact');
        $case->needy_address = $request->input('address');
        $case->title = $request->input('title');
        $case->amount = $request->input('amount');
        $case->status = $request->input('status');
        $case->category = $request->input('category');
        $case->description = $request->input('description');
        $case->save();
        return redirect('/admin/cases');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cases  $cases
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case = Cases::find($id);
        $case->delete();
        return redirect('/admin/cases');
    }
}
