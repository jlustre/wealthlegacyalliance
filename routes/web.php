<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Mentor\MentorDashboard;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Users\UserCreate;
use App\Livewire\Users\UserIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::redirect('settings', 'settings/profile');
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
});

Route::middleware(['auth', 'verified', 'admin'])->group(function () {
  Route::view('admin/dashboard', 'admin/dashboard', ['pagetitle' => 'Admin Dashboard'])->name('admin.dashboard');
  Route::view('admin/users', 'admin/users', ['pagetitle' => 'Users'])->name('admin.users');

  // Route::get('admin/users', UserIndex::class)->name('admin.users');
  Route::get('admin/users/create', UserCreate::class)->name('admin.users.create');

});
Route::middleware(['auth', 'verified', 'mentor'])->group(function () {
    Route::get('mentor/dashboard', MentorDashboard::class)->name('mentor.dashboard');
});


require __DIR__.'/auth.php';
