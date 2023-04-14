<?php

namespace App\View\Components\Section;

use Illuminate\View\Component;

use App\Models\Cases as CasesData;

class Cases extends Component
{
    public $cases;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(CasesData $casesData)
    {
        $this->cases = $casesData::orderBy('id','desc')->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.cases.index');
    }
}
