<?php

namespace App\View\Components\Section;

use App\Models\CaseDonation;
use App\Models\Cases;
use App\Models\Donor;
use App\Models\ProjectDonation;
use Illuminate\View\Component;

class Impact extends Component
{
    public $cases;
    public $donations;
    public $donors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Cases $case, CaseDonation $caseDonation, ProjectDonation $projectDonation, Donor $donor)
    {
        $this->cases = $case::count();
        $this->donations = ($caseDonation::sum('amount') + $projectDonation::sum('amount'))/100000;
        $this->donors = $donor::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.impact.index');
    }
}
