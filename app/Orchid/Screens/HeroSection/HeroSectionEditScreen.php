<?php

namespace App\Orchid\Screens\HeroSection;

use App\Models\HeroSection;
use App\Orchid\Layouts\HeroSection\HeroSectionEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class HeroSectionEditScreen extends Screen
{
    public $hero_section;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(HeroSection $hero_section): iterable
    {
        return [
            'hero_section' => $hero_section,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'HeroSection';
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
            Layout::block(HeroSectionEditLayout::class)
                ->title(__('HeroSection Information')),
        ];
    }
    
    /**
     * @param HeroSection $heroSection
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(HeroSection $hero_section, Request $request)
    {
        $request->validate([
            'hero_section.headline' => 'required',
            'hero_section.subheadline' => 'required',
        ]);

        $hero_section->fill($request->get('hero_section'))
            ->fill([
                $hero_section->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('HeroSection was saved'));

        return redirect()->route('platform.hero-sections');
    }
}
