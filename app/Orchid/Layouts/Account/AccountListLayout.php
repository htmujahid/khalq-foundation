<?php

namespace App\Orchid\Layouts\Account;

use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;


class AccountListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'accounts';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('bank_name', 'Bank Name'),
            TD::make('account_name', 'Account Name'),
            TD::make('account_number', 'Account Number'),
            TD::make('status', 'Status'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Account $account) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.accounts.edit', $account->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.account.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $account->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.account.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.account.update',
                        'platform.account.delete'
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no accounts yet.');
    }
}
