<?php

namespace App\Orchid\Layouts\Story;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
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

            Cropper::make('story.image')
                ->title('image')
                ->width(356)
                ->height(224)
                ->targetRelativeUrl()
                ->storage('public')
                ->path('stories'),

            Input::make('story.link')
                ->type('text')
                ->title(__('Link')),

            Input::make('story.date')
                ->type('date')
                ->title(__('Date')),
            
        ];
    }
}
