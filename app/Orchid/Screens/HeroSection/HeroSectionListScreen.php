<?php

namespace App\Orchid\Screens\HeroSection;

use App\Models\HeroSection;
use App\Orchid\Layouts\HeroSection\HeroSectionListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class HeroSectionListScreen extends Screen
{
    public $hero_sections;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'hero_sections' => HeroSection::filters()->defaultSort('id', 'desc')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'HeroSections';
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
                ->route('platform.hero-sections.create'),
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
            HeroSectionListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.ui.delete') == false)
        {
            Toast::error(__('You can not delete this HeroSection'));
            return;
        }

        try
        {
            HeroSection::findOrFail($request->get('id'))->delete();
            Toast::info(__('HeroSection was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('HeroSection was not removed'));
        }

    }
}
