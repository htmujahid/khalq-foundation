<?php

namespace App\Orchid\Screens\Donor;

use App\Models\Cases;
use App\Models\Donor;
use App\Orchid\Layouts\Donor\DonorEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class DonorEditScreen extends Screen
{
    public $donor;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Donor $donor): iterable
    {
        return [
            'donor' => $donor,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Donor';
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
            Layout::block(DonorEditLayout::class)
                ->title(__('Donor Information')),
        ];
    }
    
    /**
     * @param Donor $donor
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Donor $donor, Request $request)
    {
        $request->validate([
            'donor.name' => 'required',
        ]);
        $donor->fill($request->get('donor'))
        ->fill([
                $donor->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Donor was saved'));

        return redirect()->route('platform.donors');
    }
}
