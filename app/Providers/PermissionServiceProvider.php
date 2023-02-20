<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Orchid\Platform\ItemPermission;
use Orchid\Platform\Dashboard;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard)
    {
        $dashboard->registerPermissions($this->registerPermissionsCase())
            ->registerPermissions($this->registerPermissionsProject())
            ->registerPermissions($this->registerPermissionsStory())
            ->registerPermissions($this->registerPermissionsDonation())
            ->registerPermissions($this->registerPermissionsDonor())
            ->registerPermissions($this->registerPermissionsAccount())
            ->registerPermissions($this->registerPermissionsTeamMember())
            ->registerPermissions($this->registerPermissionsUpdate())
            ->registerPermissions($this->registerPermissionsNotify())
            ->registerPermissions($this->registerPermissionsUI());
    }

    /**
     * Register permissions Case.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsCase()
    {
        return ItemPermission::group('Case')
            ->addPermission('platform.case.create', 'Create')
            ->addPermission('platform.case.read', 'Read')
            ->addPermission('platform.case.update', 'Update')
            ->addPermission('platform.case.delete', 'Delete');
    }

    /**
     * Register permissions Project.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsProject(){
        return ItemPermission::group('Project')
            ->addPermission('platform.project.create', 'Create')
            ->addPermission('platform.project.read', 'Read')
            ->addPermission('platform.project.update', 'Update')
            ->addPermission('platform.project.delete', 'Delete');
    }

    /**
     * Register permissions Story.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsStory(){
        return ItemPermission::group('Story')
            ->addPermission('platform.story.create', 'Create')
            ->addPermission('platform.story.read', 'Read')
            ->addPermission('platform.story.update', 'Update')
            ->addPermission('platform.story.delete', 'Delete');
    }

    /**
     * Register permissions Donation.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsDonation(){
        return ItemPermission::group('Donation')
            ->addPermission('platform.donation.create', 'Create')
            ->addPermission('platform.donation.read', 'Read')
            ->addPermission('platform.donation.update', 'Update')
            ->addPermission('platform.donation.delete', 'Delete');
    }

    /**
     * Register permissions Donor.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsDonor(){
        return ItemPermission::group('Donor')
            ->addPermission('platform.donor.create', 'Create')
            ->addPermission('platform.donor.read', 'Read')
            ->addPermission('platform.donor.update', 'Update')
            ->addPermission('platform.donor.delete', 'Delete');
    }

    /**
     * Register permissions Account.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsAccount(){
        return ItemPermission::group('Account')
            ->addPermission('platform.account.create', 'Create')
            ->addPermission('platform.account.read', 'Read')
            ->addPermission('platform.account.update', 'Update')
            ->addPermission('platform.account.delete', 'Delete');
    }

    /**
     * Register permissions Team.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsTeamMember(){
        return ItemPermission::group('Team')
            ->addPermission('platform.team-member.create', 'Create')
            ->addPermission('platform.team-member.read', 'Read')
            ->addPermission('platform.team-member.update', 'Update')
            ->addPermission('platform.team-member.delete', 'Delete');
    }
    
    /**
     * Register permissions Update.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsUpdate(){
        return ItemPermission::group('Update')
        ->addPermission('platform.update.create', 'Create')
        ->addPermission('platform.update.read', 'Read')
        ->addPermission('platform.update.update', 'Update')
        ->addPermission('platform.update.delete', 'Delete');
    }
    
    /**
     * Register permissions Notify.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsNotify(){
        return ItemPermission::group('Notify')
        ->addPermission('platform.notify.create', 'Create')
        ->addPermission('platform.notify.read', 'Read')
        ->addPermission('platform.notify.update', 'Update')
        ->addPermission('platform.notify.delete', 'Delete');
    }

    /**
     * Register permissions UI.
     *
     * @return ItemPermission
     */
    protected function registerPermissionsUI(){
        return ItemPermission::group('UI')
            ->addPermission('platform.ui.create', 'Create')
            ->addPermission('platform.ui.read', 'Read')
            ->addPermission('platform.ui.update', 'Update')
            ->addPermission('platform.ui.delete', 'Delete');
    }

}
