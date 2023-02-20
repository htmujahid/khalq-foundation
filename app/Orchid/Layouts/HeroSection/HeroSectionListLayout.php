<?php

namespace App\Orchid\Layouts\HeroSection;

use App\Models\HeroSection;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class HeroSectionListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'hero_sections';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('headline', 'Headline'),
            TD::make('subheadline', 'Subheadline'),
            TD::make('status', 'Status'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (HeroSection $hero_section) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.hero-sections.edit', $hero_section->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.ui.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $hero_section->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.ui.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.ui.update',
                        'platform.ui.delete',
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no hero sections yet.');
    }

}
