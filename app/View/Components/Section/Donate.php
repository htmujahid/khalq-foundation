<?php

namespace App\View\Components\Section;

use App\Models\Account;
use Illuminate\View\Component;

class Donate extends Component
{
    public $accounts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Account $account)
    {
        $this->accounts = $account->where('status','Active')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.donate.index');
    }
}
