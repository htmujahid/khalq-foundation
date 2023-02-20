<?php

namespace App\Orchid\Layouts\Review;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ReviewEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('review.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name')),
            
            TextArea::make('review.message')
                ->type('text')
                ->rows(5)
                ->required()
                ->title(__('Message')),
        ];
    }
}
