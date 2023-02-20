<?php

namespace App\Orchid\Screens\Alert;

use App\Models\Alert;
use App\Orchid\Layouts\Alert\AlertListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class AlertListScreen extends Screen
{
    public $alerts;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'alerts' => Alert::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Alerts';
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
                ->route('platform.alerts.create'),
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
            AlertListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.alert.delete') == false)
        {
            Toast::error(__('You can not delete this Alert'));
            return;
        }

        try
        {
            Alert::findOrFail($request->get('id'))->delete();
            Toast::info(__('Alert was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Alert was not removed'));
        }

    }
}
