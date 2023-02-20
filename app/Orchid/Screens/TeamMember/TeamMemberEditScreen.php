<?php

namespace App\Orchid\Screens\TeamMember;

use App\Models\TeamMember;
use App\Orchid\Layouts\TeamMember\TeamEditLayout;
use App\Orchid\Layouts\TeamMember\TeamMemberEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class TeamMemberEditScreen extends Screen
{
    public $team_member;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(TeamMember $team_member): iterable
    {
        return [
            'team_member' => $team_member,
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Team Member';
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
            Layout::block(TeamMemberEditLayout::class)
                ->title(__('Team Information')),
        ];
    }
    
    /**
     * @param TeamMember $team_member
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(TeamMember $team_member, Request $request)
    {
        $request->validate([
            'team_member.name' => 'required',
            'team_member.gender' => 'required',
            'team_member.email' => 'required',
            'team_member.contact' => 'required',
            'team_member.address' => 'required',
            'team_member.designation' => 'required',
            'team_member.portfolio' => 'required',
        ]);

        $team_member->fill($request->get('team_member'))
            ->fill([
                $team_member->exists? 'updated_by': 'created_by' 
                    => auth()->user()->email,
            ])
            ->save();

        Toast::info(__('Team Member was saved'));

        return redirect()->route('platform.team-members');
    }
}
