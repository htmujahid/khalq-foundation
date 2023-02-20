<?php

namespace App\Orchid\Layouts\Update;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class UpdateEditLayout extends Rows
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
            TextArea::make('update.message')
                ->type('text')
                ->rows(5)
                ->required()
                ->title(__('Message')),

            Input::make('update.link')
                ->type('text')
                ->required()
                ->title(__('Link')),

            Select::make('update.status')
                ->options([
                    'Active' => 'Active',
                    'Inactive' => 'Inactive',
                ])
                ->required()
                ->title(__('Status')),
        ];
    }
}
