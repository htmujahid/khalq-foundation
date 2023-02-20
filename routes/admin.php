<?php

use App\Orchid\Screens\Account\AccountEditScreen;
use App\Orchid\Screens\Account\AccountListScreen;
use App\Orchid\Screens\Alert\AlertListScreen;
use App\Orchid\Screens\Alert\AlertEditScreen;
use App\Orchid\Screens\Case\CaseEditScreen;
use App\Orchid\Screens\Case\CaseListScreen;
use App\Orchid\Screens\Donation\CaseDonationEditScreen;
use App\Orchid\Screens\Donation\CaseDonationListScreen;
use App\Orchid\Screens\Donation\ProjectDonationEditScreen;
use App\Orchid\Screens\Donation\ProjectDonationListScreen;
use App\Orchid\Screens\Donor\DonorEditScreen;
use App\Orchid\Screens\Donor\DonorListScreen;
use App\Orchid\Screens\HeroSection\HeroSectionEditScreen;
use App\Orchid\Screens\HeroSection\HeroSectionListScreen;
use App\Orchid\Screens\Notify\NotifyScreen;
use App\Orchid\Screens\Project\ProjectEditScreen;
use App\Orchid\Screens\Project\ProjectListScreen;
use App\Orchid\Screens\Story\StoryEditScreen;
use App\Orchid\Screens\Story\StoryListScreen;
use App\Orchid\Screens\Review\ReviewEditScreen;
use App\Orchid\Screens\Review\ReviewListScreen;
use App\Orchid\Screens\TeamMember\TeamMemberEditScreen;
use App\Orchid\Screens\TeamMember\TeamMemberListScreen;
use App\Orchid\Screens\Update\UpdateEditScreen;
use App\Orchid\Screens\Update\UpdateListScreen;
use Illuminate\Support\Facades\Route;
use Tabuna\Breadcrumbs\Trail;

// admin prefix

Route::group(['prefix' => 'admin'], function () {
    // cases
    Route::screen('/cases', CaseListScreen::class)
        ->name('platform.cases')
        ->middleware('access:platform.case.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Cases'), route('platform.cases')));
    Route::screen('/cases/create', CaseEditScreen::class)
        ->name('platform.cases.create')
        ->middleware('access:platform.case.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.cases')
            ->push(__('Create'), route('platform.cases.create')));
    Route::screen('cases/{case}/edit', CaseEditScreen::class)
        ->name('platform.cases.edit')
        ->middleware('access:platform.case.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.cases')
            ->push(__('Case'), route('platform.cases')));

    // projects
    Route::screen('/projects', ProjectListScreen::class)    
        ->name('platform.projects')
        ->middleware('access:platform.project.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Projects'), route('platform.projects')));
    Route::screen('/projects/create', ProjectEditScreen::class)
        ->name('platform.projects.create')
        ->middleware('access:platform.project.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.projects')
            ->push(__('Create'), route('platform.projects.create')));
    Route::screen('projects/{case}/edit', ProjectEditScreen::class)
        ->name('platform.projects.edit')
        ->middleware('access:platform.project.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.projects')
            ->push(__('Project'), route('platform.projects')));

    // stories
    Route::screen('/stories', StoryListScreen::class)    
        ->name('platform.stories')
        ->middleware('access:platform.story.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('stories'), route('platform.stories')));
    Route::screen('/stories/create', StoryEditScreen::class)
        ->name('platform.stories.create')
        ->middleware('access:platform.story.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.stories')
            ->push(__('Create'), route('platform.stories.create')));
    Route::screen('stories/{case}/edit', StoryEditScreen::class)
        ->name('platform.stories.edit')
        ->middleware('access:platform.story.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.stories')
            ->push(__('Story'), route('platform.stories')));

    // case donations
    Route::screen('/case-donations', CaseDonationListScreen::class)
        ->name('platform.case-donations')
        ->middleware('access:platform.donation.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Case Donations'), route('platform.case-donations')));
    Route::screen('/case-donations/create', CaseDonationEditScreen::class)
        ->name('platform.case-donations.create')
        ->middleware('access:platform.donation.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.case-donations')
            ->push(__('Create'), route('platform.case-donations.create')));
    Route::screen('case-donations/{donation}/edit', CaseDonationEditScreen::class)
        ->name('platform.case-donations.edit')
        ->middleware('access:platform.donation.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.case-donations')
            ->push(__('Case Donation'), route('platform.case-donations')));

    // project donations
    Route::screen('/project-donations', ProjectDonationListScreen::class)
        ->name('platform.project-donations')
        ->middleware('access:platform.donation.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Project Donations'), route('platform.project-donations')));
    Route::screen('/project-donations/create', ProjectDonationEditScreen::class)
        ->name('platform.project-donations.create')
        ->middleware('access:platform.donation.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.project-donations')
            ->push(__('Create'), route('platform.project-donations.create')));
    Route::screen('project-donations/{donation}/edit', ProjectDonationEditScreen::class)
        ->name('platform.project-donations.edit')
        ->middleware('access:platform.donation.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.project-donations')
            ->push(__('Project Donation'), route('platform.project-donations')));

    // donors
    Route::screen('/donors', DonorListScreen::class)
        ->name('platform.donors')
        ->middleware('access:platform.donor.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Donors'), route('platform.donors')));
    Route::screen('/donors/create', DonorEditScreen::class)
        ->name('platform.donors.create')
        ->middleware('access:platform.donor.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.donors')
            ->push(__('Create'), route('platform.donors.create')));
    Route::screen('donors/{donor}/edit', DonorEditScreen::class)
        ->name('platform.donors.edit')
        ->middleware('access:platform.donor.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.donors')
            ->push(__('Donor'), route('platform.donors')));

    // accounts
    Route::screen('/accounts', AccountListScreen::class)
        ->name('platform.accounts')
        ->middleware('access:platform.account.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Accounts'), route('platform.accounts')));
    Route::screen('/accounts/create', AccountEditScreen::class)
        ->name('platform.accounts.create')
        ->middleware('access:platform.account.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.accounts')
            ->push(__('Create'), route('platform.accounts.create')));
    Route::screen('accounts/{account}/edit', AccountEditScreen::class)
        ->name('platform.accounts.edit')
        ->middleware('access:platform.account.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.accounts')
            ->push(__('Account'), route('platform.accounts')));

    // updates
    Route::screen('/updates', UpdateListScreen::class)
        ->name('platform.updates')
        ->middleware('access:platform.update.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Updates'), route('platform.updates')));
    Route::screen('/updates/create', UpdateEditScreen::class)
        ->name('platform.updates.create')
        ->middleware('access:platform.update.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.updates')
            ->push(__('Create'), route('platform.updates.create')));
    Route::screen('updates/{update}/edit', UpdateEditScreen::class)
        ->name('platform.updates.edit')
        ->middleware('access:platform.update.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.updates')
            ->push(__('Update'), route('platform.updates')));

    // notify    
    Route::screen('/notify', NotifyScreen::class)
        ->name('platform.notify')
        ->middleware('access:platform.notify.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Notify'), route('platform.notify')));
            
    // team members    
    Route::screen('/team-members', TeamMemberListScreen::class)
        ->name('platform.team-members')
        ->middleware('access:platform.team-member.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Team Members'), route('platform.team-members')));
    Route::screen('/team-members/create', TeamMemberEditScreen::class)
        ->name('platform.team-members.create')
        ->middleware('access:platform.team-member.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.team-members')
            ->push(__('Create'), route('platform.team-members.create')));
    Route::screen('team-members/{team}/edit', TeamMemberEditScreen::class)
        ->name('platform.team-members.edit')
        ->middleware('access:platform.team-member.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.team-members')
            ->push(__('Team Member'), route('platform.team-members')));

    // hero sections    
    Route::screen('/hero-sections', HeroSectionListScreen::class)
            ->name('platform.hero-sections')
            ->middleware('access:platform.ui.read')
            ->breadcrumbs(fn (Trail $trail) => $trail
                ->parent('platform.index')
                ->push(__('Hero Sections'), route('platform.hero-sections')));
    Route::screen('/hero-sections/create', HeroSectionEditScreen::class)
        ->name('platform.hero-sections.create')
        ->middleware('access:platform.ui.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.hero-sections')
            ->push(__('Create'), route('platform.hero-sections.create')));
    Route::screen('hero-sections/{hero}/edit', HeroSectionEditScreen::class)
        ->name('platform.hero-sections.edit')
        ->middleware('access:platform.ui.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.hero-sections')
            ->push(__('Hero Section'), route('platform.hero-sections')));

    // alerts
    Route::screen('/alerts', AlertListScreen::class)
        ->name('platform.alerts')
        ->middleware('access:platform.ui.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Alerts'), route('platform.alerts')));
    Route::screen('/alerts/create', AlertEditScreen::class)
        ->name('platform.alerts.create')
        ->middleware('access:platform.ui.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.alerts')
            ->push(__('Create'), route('platform.alerts.create')));
    Route::screen('alerts/{alert}/edit', AlertEditScreen::class)
        ->name('platform.alerts.edit')
        ->middleware('access:platform.ui.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.alerts')
            ->push(__('Alert'), route('platform.alerts')));

    // reviews    
    Route::screen('/reviews', ReviewListScreen::class)
        ->name('platform.reviews')
        ->middleware('access:platform.ui.read')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.index')
            ->push(__('Reviews'), route('platform.reviews')));
    Route::screen('/reviews/create', ReviewEditScreen::class)
        ->name('platform.reviews.create')
        ->middleware('access:platform.ui.create')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.reviews')
            ->push(__('Create'), route('platform.reviews.create')));
    Route::screen('reviews/{review}/edit', ReviewEditScreen::class)
        ->name('platform.reviews.edit')
        ->middleware('access:platform.ui.update')
        ->breadcrumbs(fn (Trail $trail) => $trail
            ->parent('platform.reviews')
            ->push(__('Review'), route('platform.reviews')));

});
