<?php

namespace App\View\Components\Section;

use App\Models\TeamMember;
use Illuminate\View\Component;

class Team extends Component
{
    public $obs;
    public $press;
    public $general;
    public $external;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(TeamMember $teamMember)
    {
        $this->obs = $teamMember->orderBy('id', 'asc')->where('designation', 'OB')->get();
        $this->press = $teamMember->orderBy('id', 'asc')->whereIn('designation', ['Director', 'Deputy Director'])->whereIn('portfolio', ['Social Media Marketing', 'Graphics', 'Publications', 'Media and Coverage' ])->get();
        $this->general = $teamMember->orderBy('id', 'asc')->whereIn('designation', ['Director', 'Deputy Director'])->whereIn('portfolio', ['Admin Events', 'Human Resources', 'Finance', 'Marketing' ])->get();
        $this->external = $teamMember->orderBy('id', 'asc')->whereIn('designation', ['Director', 'Deputy Director'])->whereIn('portfolio', ['External Relations', 'Campus Ambassadors'])->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.team.index');
    }
}
