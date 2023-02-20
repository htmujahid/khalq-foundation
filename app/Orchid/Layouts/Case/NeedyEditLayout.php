<?php

namespace App\Orchid\Layouts\Case;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class NeedyEditLayout extends Rows
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = '';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('case.needy_name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Needy Name')),
            
            Input::make('case.needy_contact')
                ->type('text')
                ->required()
                ->title(__('Needy Contact')),

            Input::make('case.needy_address')
                ->type('text')
                ->required()
                ->title(__('Needy Address')),
            
        ];
    }
}
