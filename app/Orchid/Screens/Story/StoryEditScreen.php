<?php

namespace App\Orchid\Screens\Story;

use App\Models\Story;
use App\Orchid\Layouts\Story\StoryEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class StoryEditScreen extends Screen
{
    public $story;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Story $story): iterable
    {
        return [
            'story' => $story, 
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Story';
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
            Layout::block(StoryEditLayout::class)
                ->title(__('Story Information')),
        ];
    }
    
    /**
     * @param Story $story
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Story $story, Request $request)
    {
        $request->validate([
            'story.title' => 'required',
            'story.description' => 'required'
        ]);

        $story->fill($request->get('story'))
        ->fill([
                $story->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Story was saved'));

        return redirect()->route('platform.stories');
    }
}
