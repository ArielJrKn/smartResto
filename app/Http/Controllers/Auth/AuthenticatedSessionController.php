<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\DAuthMail;
use Carbon\Carbon;
use App\Jobs\WarningConnectionMailJob;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.auth');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): view
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth::user();
         Auth::logout();
        $user->generateDAuthCode();

        Mail::to($user->email)->send(new DAuthMail($user));
        
        session(['2fa_user_email' => $user->email]);

        return view('auth.DAuthForm');
        // return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function verify2FA(Request $request){
        $request->validate([
            'code' => 'required|integer',
        ]);
         // dd(session('2fa_user_email'), $request->code);

        $user = User::where('email', session('2fa_user_email'))->firstOrFail();
        if ($user->DAuth != $request->code) {
            WarningConnectionMailJob::dispatch($user);

            return back()->with('error', 'Code incorrecte');
        }elseif (now()->greaterThan($user->DAuthExpires)) {
            return back()->with('error', 'Code expiré');
        }else{
            $user->resetDAuthCode();
            Auth::login($user);
            return redirect()->route('employes');
        }
    }
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
