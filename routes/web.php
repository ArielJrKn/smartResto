<?php
use App\Models\User;
use Carbon\Carbon;
use App\Mail\DAuthMail;
use App\Jobs\WarningConnectionMailJob;
use App\Mail\WarningConnectionMail;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
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
    Route::get('/showEmployes/{user}', 'showemployes')->name('showemployes');
});

Route::controller(ProductController::class)->middleware(['auth', 'verified'])->group(function(){
    Route::post('/addProduct', 'store')->name('addProduct');
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
