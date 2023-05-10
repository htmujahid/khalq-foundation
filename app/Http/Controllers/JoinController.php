<?php

namespace App\Http\Controllers;
use App\Models\JoiningMember;
use App\Models\JoiningMemberAM;
use App\Models\JoiningMemberCA;
use App\Models\JoiningMemberGTM;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    public function index(){
        return view('join');
    }
    public function gtm(Request $request){
        $joiningmember = new JoiningMember;
        $joiningmembergtm = new JoiningMemberGTM;
        $joiningmember->name = $request->input('name');
        $joiningmember->gender = $request->input('gender');
        $joiningmember->email = $request->input('email');
        $joiningmember->contact = $request->input('contact');
        $joiningmember->address = $request->input('address');
        $joiningmember->company = $request->input('company');
        $joiningmember->department = $request->input('department');
        $joiningmember->title = $request->input('title');
        $joiningmember->type = "gtm";
        $joiningmember->motive = $request->input('motive');
        $joiningmember->save();
        $joiningmembergtm->member_id = JoiningMember::select('id')->max('id');
        $joiningmembergtm->designation = $request->input('designation');
        $joiningmembergtm->portfolio_1 = $request->input('portfolio1');
        $joiningmembergtm->portfolio_2 = $request->input('portfolio2');
        $joiningmembergtm->save();
        return view('thank', ['subject'=>'Thank You For Your Interest', 'message'=>'Your Response has been recorded successfully.']);
    }
    public function am(Request $request){
        $joiningmember = new JoiningMember;
        $joiningmemberam = new JoiningMemberAM;
        $joiningmember->name = $request->input('name');
        $joiningmember->gender = $request->input('gender');
        $joiningmember->email = $request->input('email');
        $joiningmember->contact = $request->input('contact');
        $joiningmember->address = $request->input('address');
        $joiningmember->company = $request->input('company');
        $joiningmember->department = $request->input('department');
        $joiningmember->title = $request->input('title');
        $joiningmember->type = "am";
        $joiningmember->motive = $request->input('motive');
        $joiningmember->save();
        $joiningmemberam->member_id = JoiningMember::select('id')->max('id');
        $joiningmemberam->area = $request->input('address');
        $joiningmemberam->save();
        return view('thank', ['subject'=>'Thank You For Your Interest', 'message'=>'Your Response has been recorded successfully.']);
    }
    public function ca(Request $request){
        $joiningmember = new JoiningMember;
        $joiningmemberca = new JoiningMemberCA;
        $joiningmember->name = $request->input('name');
        $joiningmember->gender = $request->input('gender');
        $joiningmember->email = $request->input('email');
        $joiningmember->contact = $request->input('contact');
        $joiningmember->address = $request->input('address');
        $joiningmember->company = $request->input('company');
        $joiningmember->department = $request->input('department');
        $joiningmember->title = $request->input('title');
        $joiningmember->type = "ca";
        $joiningmember->motive = $request->input('motive');
        $joiningmember->save();
        $joiningmemberca->member_id = JoiningMember::select('id')->max('id');
        $joiningmemberca->company = $request->input('company');
        $joiningmemberca->save();
        return view('thank', ['subject'=>'Thank You For Your Interest', 'message'=>'Your Response has been recorded successfully.']);
    }
}
