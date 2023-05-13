<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

class Join extends Component
{
    public $join;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->join = "https://www.linkedin.com/jobs/search/?f_C=1441&geoId=92000000&keywords=web%20developer&location=Worldwide";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.join.index');
    }
}
