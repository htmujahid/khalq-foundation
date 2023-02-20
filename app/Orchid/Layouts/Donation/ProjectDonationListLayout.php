<?php

namespace App\Orchid\Layouts\Donation;

use App\Models\ProjectDonation;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ProjectDonationListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'project_donations';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('project_id', 'Project ID'),
            TD::make('donor_id', 'Donor ID'),
            TD::make('amount', 'Amount'),                   
            TD::make('account', 'Account'),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (ProjectDonation $project_donation) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.project-donations.edit', $project_donation->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.donation.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $project_donation->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.donation.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.donation.update',
                        'platform.donation.delete'
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no donations yet.');
    }

}
