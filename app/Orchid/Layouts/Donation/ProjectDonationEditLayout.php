<?php

namespace App\Orchid\Layouts\Donation;

use App\Models\Donor;
use App\Models\Project;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;

class ProjectDonationEditLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title;

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Relation::make('project_donation.project_id')
                ->required()
                ->fromModel(Project::class, 'id')
                ->title(__('Project ID')),
                
            ModalToggle::make('Add New Donor')
                ->modal('addNewDonor')
                ->method('addNewDonor')
                ->icon('plus'),
                            
            Relation::make('project_donation.donor_id')
                ->required()
                ->fromModel(Donor::class, 'id')
                ->displayAppend('full')
                ->title(__('Donor ID')),
            
            Input::make('project_donation.amount')
                ->type('number')
                ->required()
                ->title(__('Amount')),
                
            Select::make('project_donation.account')
                ->options([
                    'EasyPaisa' => 'EasyPaisa',
                    'JazzCash' => 'JazzCash',
                    'SadaPay' => 'SadaPay',
                    'HBL' => 'HBL',
                    'By Hand' => 'By Hand',
                ])
                ->required()
                ->title(__('Account')),
        ];
    }
}
