<?php

use App\Models\Project;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/cases', function () {
    return view('pages.cases');
});

Route::get('/projects', function () {
    return view('pages.projects.index');
});

Route::get('/projects/{project}', function (Project $project) {
    return view('pages.projects.detail')->with('project', $project);
});

Route::get('/stories', function () {
    return view('pages.stories.index');
});

Route::get('/stories/{story}', function (Story $story) {
    return view('pages.stories.detail')->with('story', $story);
});

Route::get('/donate', function () {
    return view('pages.donate');
});


Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

