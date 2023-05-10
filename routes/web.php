<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CaseController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DonorController;
use App\Http\Controllers\Admin\CaseDonationController;
use App\Http\Controllers\Admin\ProjectDonationController;
use App\Http\Controllers\Admin\TeamMemberController;
use App\Http\Controllers\Admin\TeamMemberGTMController;
use App\Http\Controllers\Admin\TeamMemberAMController;
use App\Http\Controllers\Admin\TeamMemberCAController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\AlertController;
use App\Http\Controllers\Admin\JoiningMemberController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsletterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// home page
Route::get('/', [HomeController::class, 'index']);
Route::get('/donate', function(){
    return view('donate');
});
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/cases', [CasesController::class, 'index']);
Route::post('/newsletter', [HomeController::class, 'newsletter']);
// join us
Route::get('/join-us', [JoinController::class, 'index']);
Route::get('/join-us/gtm', [JoinController::class, 'index']);
Route::get('/join-us/am', [JoinController::class, 'index']);
Route::get('/join-us/ca', [JoinController::class, 'index']);
Route::post('/join-us/gtm', [JoinController::class, 'gtm']);
Route::post('/join-us/am', [JoinController::class, 'am']);
Route::post('/join-us/ca', [JoinController::class, 'ca']);
// contact us
Route::get('/contact-us', [ContactUsController::class, 'index']);
Route::post('/contact-us', [ContactUsController::class, 'store']);
// about us
Route::get('/about-us', function(){
    return view('about');
});

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/team-members', [TeamMemberController::class, 'index']);
    Route::get('/transactions', [TransactionController::class, 'index']);
    Route::get('/joining-members', [JoiningMemberController::class, 'index']);
    Route::get('/contacts', [ContactController::class, 'index']);
    Route::get('/newsletters', [NewsletterController::class, 'index']);
    Route::resources([
        '/cases' => CaseController::class,
        '/projects' => ProjectController::class,
        '/donors' => DonorController::class,
        '/case-donations' => CaseDonationController::class,
        '/project-donations' => ProjectDonationController::class,
        '/team-members/gtm' => TeamMemberGTMController::class,
        '/team-members/am' => TeamMemberAMController::class,
        '/team-members/ca' => TeamMemberCAController::class,
        '/reviews'=> ReviewController::class,
        '/alerts' => AlertController::class]);
});

Route::redirect('/dashboard', '/admin/dashboard');
require __DIR__.'/auth.php';
