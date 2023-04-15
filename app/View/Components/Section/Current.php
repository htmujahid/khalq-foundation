<?php

namespace App\View\Components\Section;

use App\Models\Account;
use App\Models\Cases;
use App\Models\Project;
use Illuminate\View\Component;

class Current extends Component
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
        $currentCase = $cases->where('status','Continue')->latest()->first();

        $currentProject = $project->where('status','Ongoing')->latest()->first();

        if($currentCase){
            $this->getCurrentCase($currentCase);
        }
        else if($currentProject){
            $this->getCurrentProject($currentProject);
        }
        else{
            $this->getCurrentCase($cases->latest()->first());
        }

    }

    public function getCurrentCase($currentCase){
        $this->id = $currentCase->id;
        $this->category = $currentCase->category;
        $this->description = $currentCase->description;
        $this->required = $currentCase->amount;
        if($currentCase->status == 'Finished'){
            $this->collected = $currentCase->amount;
            $this->status = '100';
        }
        else{
            $this->collected = $currentCase->case_donation()->sum('amount');
            $this->status = $this->collected / $this->required * 100;
        }
        $this->remaining = $this->required - $this->collected;
        $this->accounts = $this->account->where('status','Active')->get();
        $this->type = 'Case';
    }

    public function getCurrentProject($currentProject){
        $this->id = $currentProject->id;
        $this->title = $currentProject->title;
        $this->description = $currentProject->description;
        $this->status = $currentProject->status;
        $this->required = $currentProject->outcome;
        if ($this->required){
            $this->collected = $currentProject->project_donation()->sum('amount');
            $this->status = $this->collected / $this->required * 100;
            $this->remaining = $this->required - $this->collected;
        }
        $this->accounts = $this->account->where('status','Active')->get();
        $this->type = 'Project';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.current.index');
    }
}
