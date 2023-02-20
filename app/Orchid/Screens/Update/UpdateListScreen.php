<?php

namespace App\Orchid\Screens\Update;

use App\Models\Update;
use App\Orchid\Layouts\Update\UpdateListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class UpdateListScreen extends Screen
{
    public $updates;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'updates' => Update::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Updates';
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
                ->route('platform.updates.create'),
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
            UpdateListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.update.delete') == false)
        {
            Toast::error(__('You can not delete this Update'));
            return;
        }

        try
        {
            Update::findOrFail($request->get('id'))->delete();
            Toast::info(__('Update was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Update was not removed'));
        }
    }
}
