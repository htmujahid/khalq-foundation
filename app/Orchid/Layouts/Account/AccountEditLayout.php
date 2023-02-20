<?php

namespace App\Orchid\Layouts\Account;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class AccountEditLayout extends Rows
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
            Input::make('account.bank_name')
                ->type('text')
                ->max(255)
                ->required()
                ->title(__('Bank Name')),
            
            Input::make('account.account_name')
                ->type('text')
                ->required()
                ->title(__('Account Name')),

            Input::make('account.account_number')
                ->type('text')
                ->required()
                ->title(__('Account Number')),

            Select::make('account.status')
                ->options([
                    'Active' => 'Active',
                    'Inactive' => 'Inactive',
                ])
                ->required()
                ->title(__('Status')),
                
        ];
    }
}
