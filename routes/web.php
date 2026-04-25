<?php
use App\Models\User;
use Carbon\Carbon;
use App\Mail\DAuthMail;
use App\Jobs\WarningConnectionMailJob;
use App\Mail\WarningConnectionMail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;


// Route pour gérer l'authentification de google-----------------------------------------------------------------------------------------
Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->stateless()->user();


    $user = User::updateOrCreate(
        ['email' => $googleUser->getEmail()],
        
        [
            'name' => $googleUser->getName(),
            // 'telephone' => $googleUser->getPhone(),
            'password' => bcrypt(uniqid()), // Mot de passe aléatoire
            'google_id' => $googleUser->getId(),
            'avatar' => $googleUser->getAvatar(),
            'email_verified_at' => Carbon::now(),
        ],
    );

     Auth::login($user);


    if ($user->wasRecentlyCreated) {
        return view('auth.afterGoogle');
    }
    Mail::to($user->email)->send(new WarningConnectionMail($user));

    // WarningConnectionMailJob::dispatch($user);


    return redirect()->route('employes');


    })->name('auth.google.callback');

    Route::get('/auth/google/redirect', function () {
          // dd(Socialite::driver('google')->redirect()->getTargetUrl());  
        return Socialite::driver('google')->redirect();
    })->name('google.login');


Route::get('/', function () {
    return view('index');
});

Route::controller(MainController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/employes', 'employes')->name('employes');
    Route::get('/produits', 'produits')->name('produits');
    Route::get('/setting', 'setting')->name('setting');
    Route::get('/tables', 'tables')->name('table');
    Route::get('/commandes', 'commandes')->name('commandes');
    Route::get('/addtablesForm', 'addtables')->name('addtable');
    Route::get('/detailproduit/{product}', 'detailproduit')->name('detailproduit');
    Route::get('/detailboisson/{boisson}', 'detailboisson')->name('detailboisson');
    Route::get('/showEmployes/{user}', 'showemployes')->name('showemployes');
});

Route::controller(TableController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::post('/addtable', 'store')->name('store');
    Route::delete('/deletetable/{id}', 'destroy')->name('deleteTable');
    Route::get('/editTable/{table}', 'edit')->name('editTable');
    Route::patch('/updateTable/{table}', 'update')->name('updateTable');
    Route::patch('/resetTable/{table}', 'reset')->name('reset');
});

Route::controller(TableController::class)->group(function(){
    Route::get('/showTable/{table}', 'show')->name('showTable');
});

Route::controller(CommandeController::class)->group(function(){
    Route::post('/commande', 'store')->name('storeCommande');
});


Route::controller(ProductController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::post('/addProduct', 'store')->name('addProduct');
    Route::post('/addVerre', 'addVerre')->name('addVerre');
    Route::get('/editProduit/{product}', 'edit')->name('edit');
    Route::patch('/updateProduit/{product}', 'update')->name('update');
    Route::delete('/deleteProduct/{product}', 'destroy')->name('deleteProduct');
    Route::delete('/deleteboisson/{product}', 'destroyBoisson')->name('deleteboisson');
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
