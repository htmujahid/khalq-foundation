<?php

namespace App\Orchid\Screens\Account;

use App\Models\Account;
use App\Orchid\Layouts\Account\AccountListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class AccountListScreen extends Screen
{
    public $accounts;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'accounts' => Account::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Accounts';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.accounts.create'),
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
            AccountListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.account.delete') == false)
        {
            Toast::error(__('You can not delete this Account'));
            return;
        }

        try
        {
            Account::findOrFail($request->get('id'))->delete();
            Toast::info(__('Account was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Account was not removed'));
        }
    }
}
