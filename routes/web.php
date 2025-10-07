<?php

use App\Livewire\ContactTable;
use App\Livewire\FeedbackForm;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use App\Livewire\TampilData;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// Rute baru untuk aplikasi feedback
Route::get('/', TampilData::class)->name('feedback.index');
Route::get('/feedback/create', FeedbackForm::class)->name('feedback.create');

// Rute bawaan starter kit
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');
    Route::get('contact-data', ContactTable::class)->name('contact.data');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});

require __DIR__.'/auth.php';