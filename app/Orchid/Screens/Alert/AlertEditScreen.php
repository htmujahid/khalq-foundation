<?php

namespace App\Orchid\Screens\Alert;

use App\Models\Alert;
use App\Orchid\Layouts\Alert\AlertEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class AlertEditScreen extends Screen
{
    public $alert;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Alert $alert): iterable
    {
        return [
            'alert' => $alert,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Alert';
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
            Layout::block(AlertEditLayout::class)
                ->title(__('Alert Information')),
        ];
    }
    
    /**
     * @param Alert $alert
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Alert $alert, Request $request)
    {
        $request->validate([
            'alert.type' => 'required',
            'alert.message' => 'required',
            'alert.status' => 'required',
        ]);

        $alert->fill($request->get('alert'))
            ->fill([
                $alert->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Alert was saved'));

        return redirect()->route('platform.alerts');
    }
}
