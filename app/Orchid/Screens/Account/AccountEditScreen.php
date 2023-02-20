<?php

namespace App\Orchid\Screens\Account;

use App\Models\Account;
use App\Orchid\Layouts\Account\AccountEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class AccountEditScreen extends Screen
{
    public $account;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Account $account): iterable
    {
        return [
            'account' => $account,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Account';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save'))
                ->icon('check')
                ->method('save'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::block(AccountEditLayout::class)
                ->title(__('Account Information')),
        ];
    }
    
    /**
     * @param Account $account
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Account $account, Request $request)
    {
        $request->validate([
            'account.bank_name' => 'required',
            'account.account_number' => 'required',
            'account.account_name' => 'required',
            'account.status' => 'required',
        ]);

        $account->fill($request->get('account'))
            ->fill([
                $account->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Account was saved'));

        return redirect()->route('platform.accounts');
    }
}
