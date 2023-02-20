<?php

namespace App\Orchid\Screens\Case;

use App\Models\Cases;
use App\Orchid\Layouts\Case\CaseListLayout;
use Faker\Provider\ar_EG\Text;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Screen\TD;
use Orchid\Screen\Actions\Link;
use Orchid\Support\Facades\Toast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CaseListScreen extends Screen
{
    public $cases;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'cases' => Cases::filters()->defaultSort('id', 'desc')->paginate(),
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Cases';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    { 
        return [
            Link::make(__('Add'))
                ->icon('plus')
                ->route('platform.cases.create'),
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
            CaseListLayout::class,
        ];
    }

    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.case.delete') == false)
        {
            Toast::error(__('You can not delete this Case'));
            return;
        }
        try
        {
            Cases::findOrFail($request->get('id'))->delete();
            Toast::info(__('Case was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Case was not removed'));
        }

    }

}
