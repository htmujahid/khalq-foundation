<?php

namespace App\Orchid\Screens\Donation;

use App\Models\CaseDonation;
use App\Models\Donor;
use App\Orchid\Layouts\Donation\CaseDonationEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CaseDonationEditScreen extends Screen
{
    public $case_donation;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(CaseDonation $case_donation): iterable
    {
        return [
            'case_donation' => $case_donation,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Case Donation';
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
            Layout::block(CaseDonationEditLayout::class)
                ->title(__('Donation Information')),
            
            Layout::modal('addNewDonor', [
                Layout::rows([
                    Input::make('donor.name')
                    ->type('text')
                    ->max(255)
                    ->required()
                    ->title(__('Name')),
                
                Input::make('donor.contact')
                    ->type('text')
                    ->title(__('Contact')),
                ])->title(__('Add New Donor')),
            ])
        ];
    }
    
    /**
     * @param CaseDonation $case_donation
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(CaseDonation $case_donation, Request $request)
    {
        $request->validate([
            'case_donation.case_id' => 'required',
            'case_donation.donor_id' => 'required',
            'case_donation.amount' => 'required',
            'case_donation.account' => 'required',
        ]);

        $case_donation->fill($request->get('case_donation'))
        ->fill([
                $case_donation->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Donation was saved'));

        return redirect()->route('platform.case-donations');
    }

    public function addNewDonor(Donor $donor, Request $request)
    {
        $request->validate([
            'donor.name' => 'required',
        ]);

        $donor->fill($request->get('donor'))
        ->fill([
                $donor->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])->save();

        Toast::info(__('Donor was saved'));

        return redirect()->route('platform.case-donations.create');
    }
}
