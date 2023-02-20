<?php

namespace App\Orchid\Screens\Donation;

use App\Models\CaseDonation;
use App\Orchid\Layouts\Donation\CaseDonationListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class CaseDonationListScreen extends Screen
{
    public $case_donations;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'case_donations' => CaseDonation::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Case Donations';
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
                ->route('platform.case-donations.create'),
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
            CaseDonationListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.donation.delete') == false)
        {
            Toast::error(__('You can not delete this Donation'));
            return;
        }

        try
        {
            CaseDonation::findOrFail($request->get('id'))->delete();
            Toast::info(__('Donation was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Donation was not removed'));
        }

    }
}
