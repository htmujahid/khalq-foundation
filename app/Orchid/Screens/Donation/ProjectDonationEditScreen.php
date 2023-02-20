<?php

namespace App\Orchid\Screens\Donation;

use App\Models\Donor;
use App\Models\ProjectDonation;
use App\Orchid\Layouts\Donation\ProjectDonationEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class ProjectDonationEditScreen extends Screen
{
    public $project_donation;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(ProjectDonation $project_donation): iterable
    {
        return [
            'project_donation' => $project_donation,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Project Donation';
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
            Layout::block(ProjectDonationEditLayout::class)
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
     * @param ProjectDonation $project_donation
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(ProjectDonation $project_donation, Request $request)
    {
        $request->validate([
            'project_donation.project_id' => 'required',
            'project_donation.donor_id' => 'required',
            'project_donation.amount' => 'required',
            'project_donation.account' => 'required',
        ]);

        $project_donation->fill($request->get('project_donation'))
        ->fill([
                $project_donation->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Donation was saved'));

        return redirect()->route('platform.project-donations');
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
