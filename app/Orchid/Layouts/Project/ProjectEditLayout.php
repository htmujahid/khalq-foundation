<?php

namespace App\Orchid\Layouts\Project;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Picture;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Fields\Upload;

class ProjectEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
                Input::make('project.title')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Title')),
                
                TextArea::make('project.description')
                    ->type('text')
                    ->rows(5)
                    ->required()
                    ->title(__('Description')),

                Input::make('project.outcome')
                    ->type('text')
                    ->title(__('Outcome')),


                Cropper::make('project.image')
                    ->title('image')
                    ->width(356)
                    ->height(224)
                    ->targetRelativeUrl()
                    ->storage('public')
                    ->path('projects'),
                    

                Input::make('project.link')
                    ->type('text')
                    ->title(__('Link')),

                Input::make('project.start_date')
                    ->type('date')
                    ->title(__('Start Date')),
                
                Input::make('project.end_date')
                    ->type('date')
                    ->title(__('End Date')),
                
                Select::make('project.status')
                    ->options([
                        'Ongoing' => 'Ongoing',
                        'Upcoming' => 'Upcoming',
                        'Previous' => 'Previous',
                    ])
                    ->required()
                    ->title(__('Status')),
        ];
    }
}
