<?php

namespace App\Orchid\Screens\Review;

use App\Models\Review;
use App\Orchid\Layouts\Review\ReviewListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class ReviewListScreen extends Screen
{
    public $reviews;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'reviews' => Review::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Reviews';
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
                ->route('platform.reviews.create'),
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
            ReviewListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.ui.delete') == false)
        {
            Toast::error(__('You can not delete this Review'));
            return;
        }

        Review::findOrFail($request->get('id'))->delete();
        Toast::info(__('Review was removed'));

        try
        {
            Review::findOrFail($request->get('id'))->delete();
            Toast::info(__('Review was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Review was not removed'));
        }

    }
}
