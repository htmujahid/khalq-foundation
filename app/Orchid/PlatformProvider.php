<?php

declare(strict_types=1);

namespace App\Orchid;

use Illuminate\Support\Facades\Auth;
use Orchid\Platform\Dashboard;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\OrchidServiceProvider;
use Orchid\Screen\Actions\Menu;
use Orchid\Support\Color;

class PlatformProvider extends OrchidServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard): void
    {
        parent::boot($dashboard);

        // ...
    }

    /**
     * @return Menu[]
     */
    public function registerMainMenu(): array
    {
        return [
            Menu::make('Dashboard')
                ->icon('speedometer')
                ->permission('platform.case.read')
                ->route('platform.dashboard'),

            Menu::make()
                ->canSee(Auth::user()->hasAnyAccess([
                    'platform.case.read',
                    'platform.project.read',
                    'platform.donation.read',
                    'platform.donor.read',
                    'platform.account.read'
                ]))
                ->title('Contributions'),

            Menu::make('Cases')
                ->icon('drawer')
                ->permission('platform.case.read')
                ->route('platform.cases'),

            Menu::make('Projects')
                ->icon('folder-alt')
                ->permission('platform.project.read')
                ->route('platform.projects'),

            Menu::make('Stories')
                ->icon('book-open')
                ->permission('platform.story.read')
                ->route('platform.stories'),

            Menu::make('Donations')
                ->icon('money')
                ->list([
                    Menu::make('Case')
                        ->permission('platform.donation.read')
                        ->route('platform.case-donations'),
                    Menu::make('Project')
                        ->permission('platform.donation.read')
                        ->route('platform.project-donations'),
                ])->permission('platform.donation.read'),

            Menu::make('Donors')
                ->icon('people')
                ->permission('platform.donor.read')
                ->route('platform.donors'),

            Menu::make('Accounts')
                ->icon('building')
                ->permission('platform.account.read')
                ->route('platform.accounts'),


            Menu::make()
                ->canSee(Auth::user()->hasAnyAccess([
                    'platform.update.read',
                    'platform.notify.read',
                    'platform.team-member.read',
                ]))
                ->title('HR'),

            Menu::make('Updates')
                ->icon('notebook')
                ->permission('platform.update.read')
                ->route('platform.updates'),

            Menu::make('Notify')
                ->icon('speech')
                ->permission('platform.notify.read')
                ->route('platform.notify'),

            Menu::make('Team Members')
                ->icon('friends')
                ->permission('platform.team-member.read')
                ->route('platform.team-members'),
                
            Menu::make()
                ->permission('platform.ui.read')
                ->title('UI'),

            Menu::make('Hero Sections')
                ->icon('monitor')
                ->permission('platform.ui.read')
                ->route('platform.hero-sections'),
            
            Menu::make('Alerts')
                ->icon('info')
                ->permission('platform.ui.read')
                ->route('platform.alerts'),

            Menu::make('Reviews')
                ->icon('note')
                ->permission('platform.ui.read')
                ->route('platform.reviews'),

            Menu::make(__('Users'))
                ->icon('user')
                ->route('platform.systems.users')
                ->permission('platform.systems.users')
                ->title(__('Access rights')),

            Menu::make(__('Roles'))
                ->icon('lock')
                ->route('platform.systems.roles')
                ->permission('platform.systems.roles'),
        ];
    }

    /**
     * @return Menu[]
     */
    public function registerProfileMenu(): array
    {
        return [
            Menu::make(__('Profile'))
                ->route('platform.profile')
                ->icon('user'),
        ];
    }

    /**
     * @return ItemPermission[]
     */
    public function registerPermissions(): array
    {
        return [
            ItemPermission::group(__('System'))
                ->addPermission('platform.systems.roles', __('Roles'))
                ->addPermission('platform.systems.users', __('Users')),
        ];
    }
}
