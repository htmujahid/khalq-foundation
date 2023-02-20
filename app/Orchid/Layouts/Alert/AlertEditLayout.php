<?php

namespace App\Orchid\Layouts\Alert;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class AlertEditLayout extends Rows
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
            Input::make('alert.type')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Type')),

            TextArea::make('alert.message')
                ->type('text')
                ->rows(5)
                ->required()
                ->title(__('Message')),
                
            Select::make('alert.status')
                ->options([
                    'active' => 'Active',
                    'inactive' => 'Inactive',
                ])
                ->title(__('Status')),
        ];
    }
}
