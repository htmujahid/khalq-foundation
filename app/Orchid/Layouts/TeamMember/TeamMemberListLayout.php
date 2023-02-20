<?php

namespace App\Orchid\Layouts\TeamMember;

use App\Models\TeamMember;
use Illuminate\Support\Facades\Auth;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class TeamMemberListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'team_members';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [                
            TD::make('id', 'ID'),
            TD::make('name', 'Name'),
            TD::make('contact', 'Contact'),
            TD::make('portfolio', 'Portfolio'),
            TD::make('designation', 'Designation'),
            
            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (TeamMember $team_member) => DropDown::make()
                    ->icon('options-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.team-members.edit', $team_member->id)
                            ->icon('pencil')
                            ->canSee(Auth::user()->hasAccess('platform.team-member.update')),

                        Button::make(__('Delete'))
                            ->icon('trash')
                            ->confirm(__('Once the account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.'))
                            ->method('remove', [
                                'id' => $team_member->id,
                            ])
                            ->canSee(Auth::user()->hasAccess('platform.team-member.delete')),
                    ]))->canSee(Auth::user()->hasAnyAccess([
                        'platform.team-member.update',
                        'platform.team-member.delete',
                    ])),
        ];    
    }

    /**
     * @return string
     */
    protected function textNotFound(): string
    {
        return __('There are no teams yet.');
    }

}
