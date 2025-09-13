<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Livewire\Volt\Volt;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\PostController;
// Route::get('/', function () {
//     return view('home');
// })->name('home');
/* home1 */
// Route::get('/', function () {
//     return view('home1');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/services', function () {
//     return view('service1');
// });

// Route::get('/contact', function () {
//     return view('contact1');
// });
/* home 2 layout*/
// Route::get('/', [HomeController::class, 'home2'])->name('home');

/*home3 validation*/
Route::prefix('users')->controller(UserController::class)
    ->name('users.')
    ->group(function () {
        Route::get('/', 'home3')->name('home3');

        Route::get('/create', 'create')->name('create');

        Route::post('/', 'store')->name('store');
    });
    /* post crud*/
route::prefix("posts")->controller(PostController::class)
->group(function(){
    Route::get('/', 'index')->name('posts.index');
    Route::get('/create', 'create')->name('posts.create');
    Route::post('/', 'store')->name('posts.store');
    // Route::get('/{id}/edit', 'edit')->name('posts.edit');
    // Route::put('/{id}', 'update')->name('posts.update');
    // Route::get('/{id}/destroy', 'destroy')->name('posts.destroy');
   
});
/*login route*/
// Route::prefix('categories')->controller(CategoryController::class)
//     ->name('categories.')
//     ->group(function () {
//         Route::get('/', 'index')->name('index');
//         Route::get('/create', 'create')->name('create');
//         Route::post('/', 'store')->name('store');
//         Route::get('/destroyAll', 'destroyAll')->name('destroyAll');
//         Route::get('/{id}/edit', 'edit')->name('edit');
//         Route::put('/{id}', 'update')->name('update');
//         Route::get('/{id}/destroy', 'destroy')->name('destroy');
//     });
// Route::get('register', [AuthController::class, 'register'])->name('register');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
