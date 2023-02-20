<?php

namespace App\Orchid\Screens\Update;

use App\Models\Update;
use App\Orchid\Layouts\Update\UpdateEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class UpdateEditScreen extends Screen
{
    public $update;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Update $update): iterable
    {
        return [
            'update' => $update,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Update';
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
            Layout::block(UpdateEditLayout::class)
                ->title(__('Update Information')),
        ];
    }
    
    /**
     * @param Update $update
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Update $update, Request $request)
    {
        $request->validate([
            'update.message' => 'required',
            'update.link' => 'required',
            'update.status' => 'required',
        ]);

        $update->fill($request->get('update'))
            ->fill([
                $update->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Update was saved'));

        return redirect()->route('platform.updates');
    }
}
