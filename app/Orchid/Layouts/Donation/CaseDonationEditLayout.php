<?php

namespace App\Orchid\Layouts\Donation;

use App\Models\Cases;
use App\Models\Donor;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\TD;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class CaseDonationEditLayout extends Rows
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
            Relation::make('case_donation.case_id')
                ->title(__('Case ID'))
                ->fromModel(Cases::class, 'id')
                ->required(),
                
            ModalToggle::make('Add New Donor')
                ->modal('addNewDonor')
                ->method('addNewDonor')
                ->icon('plus'),
                
            Relation::make('case_donation.donor_id')
                ->title(__('Donor ID'))
                ->fromModel(Donor::class, 'id')
                ->displayAppend('full')
                ->required(),
            
            Input::make('case_donation.amount')
                ->type('number')
                ->required()
                ->title(__('Amount')),

            Select::make('case_donation.account')
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
