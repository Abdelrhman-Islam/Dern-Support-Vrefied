<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [AppController::class, 'main']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/userHome', [AppController::class, 'userHome'])->name('user.index');

//////////// Tickets ////////////

Route::get('/createTicket', [AppController::class, 'createTicket'])->name('ticket.create');

Route::post('/storeTicket', [AppController::class, 'storeTicket'])->name('ticket.store');

Route::get('/ticket/{id}', [AppController::class, 'showTicket'])->name('ticket.show');

///////////// Q / A /////////////

Route::get('/qa', [AppController::class, 'qa'])->name('qa');

//////////// Admins /////////////

Route::get('/adminHome', [AdminController::class, 'index'])->name('admin.index');

Route::put('/setProb/{id}', [AdminController::class, 'setProb'])->name('prob.set');


//////////// Inventory //////

Route::get('/inventory', [AdminController::class, 'invIndex'])->name('inventory.index');

Route::get('/inventory/create', [AdminController::class, 'create'])->name('inventory.create');

Route::put('/inventory/{id}', [AdminController::class, 'updateQty'])->name('inventory.update');

require __DIR__.'/auth.php';
