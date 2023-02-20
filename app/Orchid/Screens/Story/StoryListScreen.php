<?php

namespace App\Orchid\Screens\Story;

use App\Models\Story;
use App\Orchid\Layouts\Story\StoryListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class StoryListScreen extends Screen
{
    public $stories;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'stories' => Story::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Stories';
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
                ->route('platform.stories.create'),
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
            StoryListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.story.delete') == false)
        {
            Toast::error(__('You can not delete this Story'));
            return;
        }
        
        try
        {
            Story::findOrFail($request->get('id'))->delete();
            Toast::info(__('Story was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Story was not removed'));
        }
    }
}
