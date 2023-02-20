<?php

namespace App\Orchid\Screens\Donor;

use App\Models\Donor;
use App\Orchid\Layouts\Donor\DonorListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class DonorListScreen extends Screen
{
    public $donors;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'donors' => Donor::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Donors';
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
                ->route('platform.donors.create'),
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
            DonorListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.donor.delete') == false)
        {
            Toast::error(__('You can not delete this Donor'));
            return;
        }

        try
        {
            Donor::findOrFail($request->get('id'))->delete();
            Toast::info(__('Donor was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Donor was not removed'));
        }
    }
}
