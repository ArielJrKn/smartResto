<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Etablissement;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.auth');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse|View
    {
        try {
            $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'tel' => 'required|string|max:255|unique:users,telephone',
            'typeEtat' => 'required|string|max:255',
            'nameEtat' => 'required|string|max:255',
            'emailEtat' => 'required|string|max:255|unique:etablissements,email',
            'telEtat' => 'required|string|max:255|unique:etablissements,telephone',
            'adresseEtat' => 'required|string|max:255',
        ]);


        $etat = Etablissement::create([
            'nom' => $request->name,
            'type' => $request->typeEtat,
            'telephone' => $request->telEtat,
            'email' => $request->emailEtat,
            'adresse' => $request->adresseEtat,
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => 'staff',
            'telephone' => $request->tel,
            'id_role' => Role::where('id',1)->first('id')->id,
            'password' => Hash::make($request->password),
            'id_etablissement' => $etat->id,

        ]);

        event(new Registered($user));
        // dd('enregistrement réussis');
        // return redirect(route('dashboard', absolute: false));
        // return redirect(route('auth.verify-email', absolute: false));
        return view('auth.verify-email');
        

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
        }
        

        // Auth::login($user);

    }
}
