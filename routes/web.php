<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// importo i vari controller
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EdibleController;
use App\Http\Controllers\Admin\RecipeController;
use App\Http\Controllers\Admin\UnedibleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// nuovo gruppo di rotte e middleware
Route::middleware(['auth', 'verified'])
    // influisce sul nome delle rotte
    ->name('admin.')
    // influisce sull'url delle rote (se uso il prefix nella route sottostante dovrò cancellare "admin" dopo lo / altrimenti darà errore)
    ->prefix('admin')
    ->group(function () {

    // modifico la route in "/admin". se presente "prefix" nel middleware soprastante la route diventa solo "/"
    Route::get('/', function () {
        // il return diventerà "admin.dashboard"
        return view('admin.dashboard');
    })->name('dashboard');

    // CREO ALTRE ROUTE
    // inserisco la rotta unica per collegare le crud della view CATEGORIES
    Route::resource('categories',CategoryController::class);

    // inserisco la rotta unica per collegare le crud della view EDIBLES
    Route::resource('edibles',EdibleController::class);

    // inserisco la rotta unica per collegare le crud della view RECEPIES
    Route::resource('recepies',RecipeController::class);

    // inserisco le rotte per collegare le crud della view UNEDIBLES
    Route::get('/unedibles', [UnedibleController::class, 'index'])->name('unedibles.index');
    Route::get('/unedibles/create', [UnedibleController::class, 'create'])->name('unedibles.create');
    Route::get('/unedibles/{unedible}', [UnedibleController::class, 'show'])->name('unedibles.show');
    Route::post('/unedibles', [UnedibleController::class, 'store'])->name('unedibles.store');
    Route::get('/unedibles/{unedible}/edit', [UnedibleController::class, 'edit'])->name('unedibles.edit');
    Route::put('/unedibles/{unedible}', [UnedibleController::class, 'update'])->name('unedibles.update');
    Route::delete('/unedibles/{unedible}', [UnedibleController::class, 'destroy'])->name('unedibles.destroy');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
