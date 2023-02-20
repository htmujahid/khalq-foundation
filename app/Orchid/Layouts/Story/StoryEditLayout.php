<?php

namespace App\Orchid\Layouts\Story;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class StoryEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('story.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Title')),
            
            TextArea::make('story.description')
                ->type('text')
                ->rows(5)
                ->required()
                ->title(__('Description')),

            Input::make('story.image')
                ->type('text')
                ->title(__('Image')),

            Input::make('story.link')
                ->type('text')
                ->title(__('Link')),

            Input::make('story.date')
                ->type('date')
                ->title(__('Date')),
            
        ];
    }
}
