<?php

namespace App\Orchid\Layouts\Story;

use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class StoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'stories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('title', 'Title'),
            TD::make('date', 'Date'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Story $story) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.stories.edit', $story->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.story.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $story->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.story.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.story.update',
                        'platform.story.delete',
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no stories yet.');
    }

}
