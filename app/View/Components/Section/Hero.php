<?php

namespace App\View\Components\Section;

use App\Models\HeroSection;
use Illuminate\View\Component;

class Hero extends Component
{
    public $headline;
    public $subheadline;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(HeroSection $heroSection)
    {
        $this->headline = $heroSection::where('status', 'active')->first()->headline;
        $this->subheadline = $heroSection::where('status', 'active')->first()->subheadline;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.hero.index');
    }
}
