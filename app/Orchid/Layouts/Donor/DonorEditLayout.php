<?php

namespace App\Orchid\Layouts\Donor;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;

class DonorEditLayout extends Rows
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
            Input::make('donor.name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Name')),
            
            Input::make('donor.contact')
                ->type('text')
                ->title(__('Contact')),
            
        ];
    }
}
