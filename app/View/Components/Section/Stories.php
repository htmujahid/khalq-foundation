<?php

namespace App\View\Components\Section;

use App\Models\Story;
use Illuminate\View\Component;

class Stories extends Component
{
    public $stories;
    public $upcoming;
    public $previous;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Story $story)
    {
        $this->stories = $story::orderBy('date','asc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.stories.index');
    }
}
