<?php

namespace App\Orchid\Layouts\Case;

use Orchid\Screen\Fields\DateTimer;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\TD;

class CaseEditLayout extends Rows
{
    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('case.title')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Title')),

            Input::make('case.amount')
                ->type('number')
                ->required()
                ->title(__('Amount')),
            
            Select::make('case.category')
                ->options([
                    'Education' => 'Education',
                    'Health' => 'Health',
                    'Ration' => 'Ration',
                    'Marriage' => 'Marriage',
                    'Financial' => 'Financial Support',
                    'Other' => 'Other',
                ])
                ->required()
                ->title(__('Category')),            

            Input::make('case.image')
                ->type('text')
                ->title(__('Image')),

            TextArea::make('case.description')
                ->rows(5)
                ->required()
                ->title(__('Description')),

            Input::make('case.start_date')
                ->type('date')
                ->title(__('Start Date')),

            Input::make('case.end_date')
                ->type('date')
                ->title(__('End Date')),

            Select::make('case.status')
                ->options([
                    'Continue' => 'Continue',
                    'Finished' => 'Finished',
                ])
                ->title(__('Status')),
        ];
    }
}
