<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(MainController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/employes', 'employes')->name('employes');
    Route::get('/showEmployes/{user}', 'showemployes')->name('showemployes');
});
// Route::get('/dashboard', function () {
//     return view('main.dashboard');
// })name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
