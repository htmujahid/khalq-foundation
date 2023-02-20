<?php

namespace App\Orchid\Screens\TeamMember;

use App\Models\TeamMember;
use App\Orchid\Layouts\TeamMember\TeamMemberListLayout;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Orchid\Support\Facades\Toast;

class TeamMemberListScreen extends Screen
{
    public $team_members;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'team_members' => TeamMember::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Team Members';
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
                ->route('platform.team-members.create'),
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
            TeamMemberListLayout::class
        ];
    }
    
    public function remove(Request $request): void
    {
        if(Auth::user()->hasAccess('platform.team-member.delete') == false)
        {
            Toast::error(__('You can not delete this Team Member'));
            return;
        }

        TeamMember::findOrFail($request->get('id'))->delete();
        Toast::info(__('Team Member was removed'));

        try
        {
            TeamMember::findOrFail($request->get('id'))->delete();
            Toast::info(__('Team Member was removed'));
        }
        catch(\Exception $e)
        {
            Toast::error(__('Team Member was not removed'));
        }

    }
}
