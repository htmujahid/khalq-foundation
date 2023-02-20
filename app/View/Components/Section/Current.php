<?php

namespace App\View\Components\Section;

use App\Models\Account;
use App\Models\Cases;
use Illuminate\View\Component;

class Current extends Component
{
    public $id;
    public $category;
    public $description;
    public $status;
    public $collected;
    public $required;
    public $remaining;
    public $accounts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Cases $cases, Account $account)
    {
        $this->id = $cases->latest()->first()->id;
        $this->category = $cases->latest()->first()->category;
        $this->description = $cases->latest()->first()->description;
        $this->status = $cases->latest()->first()->status;
        $this->required = $cases->latest()->first()->amount;
        if($this->status == 'Finished'){
            $this->collected = $cases->latest()->first()->amount;
            $this->status = '100';
        }
        else{
            $this->collected = $cases->latest()->first()->case_donation()->sum('amount');
            $this->status = $this->collected / $this->required * 100;
        }
        $this->remaining = $this->required - $this->collected;
        $this->accounts = $account->where('status','Active')->get();
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
