<?php

namespace App\View\Components;

use App\Models\Cases;
use App\Models\Project;
use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        
        return view('layouts.app', ['status'=>Cases::select('status')->where('status','continue')->first(), 'count'=>Project::count()]);
    }
}
