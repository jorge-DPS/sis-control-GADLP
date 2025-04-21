<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $datos = $request;
        dd($datos);

        $request->validate([
            'name' => ['required', 'string', 'lowercase', 'max:255'],
            'last_name' => ['required', 'string', 'lowercase', 'max:255'],
            'identity_card' => ['required', 'numeric', 'lowercase', 'unique:'.User::class],
            'phone' => ['required', 'max:10'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'rol' => ['required', 'numeric']
        ]);

        $user = User::create([
            'user_type_id' => 1,
            'name' => $request->name,
            'last_name' => $request->last_name,
            'identity_card' => $request->identity_card,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type_user' => 1,
            'status' => true
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
