<?php

namespace App\View\Components\Section;

use App\Models\Review;
use Illuminate\View\Component;

class Testimonial extends Component
{
    public $reviews;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Review $review)
    {
        $this->reviews = $review->orderBy('id', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.section.testimonial.index');
    }
}
