<?php

namespace App\Orchid\Screens\Case;

use App\Models\Cases;
use App\Orchid\Layouts\Case\CaseEditLayout;
use App\Orchid\Layouts\Case\NeedyEditLayout;
use App\Orchid\Layouts\User\UserEditLayout;
use Orchid\Alert\Alert;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Color;
use Orchid\Support\Facades\Toast;
use Illuminate\Http\Request;

class CaseEditScreen extends Screen
{
    public $case;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Cases $case): iterable
    {
        return [
            'case' => $case,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Create Case';
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
            Layout::block(NeedyEditLayout::class)
                ->title(__('Needy Information'))
                ->description(__('Needy name, address, phone number, etc.')),

            Layout::block(CaseEditLayout::class)
                ->title(__('Case Information'))
                ->description(__('Case Title, Category, Description, etc.')),

        ];
    }

    /**
     * @param Cases $cases
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Cases $cases, Request $request)
    {
        $request->validate([
            'case.title' => 'required',
            'case.description' => 'required',
            'case.category' => 'required',
            'case.amount' => 'required',
            'case.status' => 'required',
            'case.needy_name' => 'required',
            'case.needy_address' => 'required',
            'case.needy_contact' => 'required',
        ]);
        
        $cases->fill($request->get('case'))
        ->fill([
            $cases->exists? 'updated_by': 'created_by' 
                => auth()->user()->email,
        ])
            ->save();

        Toast::info(__('Case was saved'));

        return redirect()->route('platform.cases');
    }

}
