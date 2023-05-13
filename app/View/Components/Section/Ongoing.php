<?php

namespace App\View\Components\Section;

use App\Models\Account;
use App\Models\Cases;
use App\Models\Project;
use Illuminate\View\Component;

class Ongoing extends Component
{
    public $id;
    public $category;
    public $title;
    public $description;
    public $status;
    public $collected;
    public $required;
    public $remaining;
    public $accounts;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Cases $cases, Project $project, public Account $account)
    {
        $ongoingCase = $cases->where('status', 'Continue')->latest()->first();

        $ongoingProject = $project->where('status', 'Ongoing')->latest()->first();

        if ($ongoingCase) {
            $this->getCurrentCase($ongoingCase);
        } else if (
            $ongoingProject &&
            is_numeric($ongoingProject->outcome)
        ) {
            $this->getCurrentProject($ongoingProject);
        } else {
            $this->getCurrentCase($cases->latest()->first());
        }
    }

    public function getCurrentCase($ongoingCase)
    {
        $this->id = $ongoingCase->id;
        $this->title = $ongoingCase->title;
        $this->category = $ongoingCase->category;
        $this->description = $ongoingCase->description;
        $this->required = $ongoingCase->amount;
        if ($ongoingCase->status == 'Finished') {
            $this->collected = $ongoingCase->amount;
            $this->status = '100';
        } else {
            $this->collected = $ongoingCase->case_donation()->sum('amount');
            $this->status = $this->collected / $this->required * 100;
        }
        $this->remaining = $this->required - $this->collected;
        $this->accounts = $this->account->where('status', 'Active')->get();
        $this->type = 'Case';
    }

    public function getCurrentProject($ongoingProject)
    {
        $this->id = $ongoingProject->id;
        $this->title = $ongoingProject->title;
        $this->description = $ongoingProject->description;
        $this->status = $ongoingProject->status;
        $this->required = $ongoingProject->outcome;
        if ($this->required) {
            $this->collected = $ongoingProject->project_donation()->sum('amount');
            $this->status = $this->collected / $this->required * 100;
            $this->remaining = $this->required - $this->collected;
        }
        $this->accounts = $this->account->where('status', 'Active')->get();
        $this->type = 'Project';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.ongoing.index');
    }
}
