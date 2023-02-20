<?php

namespace App\View\Components\Section;

use App\Models\Project;
use Illuminate\View\Component;

class Projects extends Component
{
    public $ongoing;
    public $upcoming;
    public $previous;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Project $project)
    {
        $this->ongoing = $project::orderBy('id','desc')->where('status', 'Ongoing')->get();
        $this->upcoming = $project::orderBy('id','desc')->where('status', 'Upcoming')->get();
        $this->previous = $project::orderBy('id','desc')->where('status', 'Previous')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.projects.index');
    }
}
