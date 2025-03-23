<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
});

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


Route::prefix('shop')->name('shop.')->group(function () {
    Route::get('/', function () {
        return view('pages.shop.index');
    })->name('index');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    // if (!Auth::check()) {
    //     return redirect('/login');
    // }

    $request->fulfill();
    return redirect('/dashboard');
})->middleware(['signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['throttle:6,1'])->name('verification.send');



require __DIR__ . '/auth.php';
