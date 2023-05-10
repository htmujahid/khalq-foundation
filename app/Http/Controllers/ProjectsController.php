<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(){
        $f_project_description = Project::where('status', 'finished')->get();   
        $c_project_description = Project::where('status', 'continue')->get();   
        $u_project_description = Project::where('status', 'upcoming')->get();   
        return view('projects', compact('f_project_description', 'c_project_description', 'u_project_description'));
    }
}
