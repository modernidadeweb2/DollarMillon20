<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\System;
use Illuminate\Support\Facades\Session;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(Request $request): View|RedirectResponse
    {
        if (empty($ref)) {
            Session::flash('error', 'É necessário ter com um patrocinador.');
            return redirect()->route('login');
        }
    
        $sponsor = User::where('username', $ref)->first();
    
        if (!$sponsor) {
            Session::flash('error', 'O patrocinador informado não existe.');
            return redirect()->route('login');
        }
    
        return view('auth.register', [
            'ref' => $ref,
            'system_name' => System::where('key', 'system_name')->value('value') ?? 'DollarMillon20'
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
        

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
