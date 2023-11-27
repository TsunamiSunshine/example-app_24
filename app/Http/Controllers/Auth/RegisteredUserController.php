<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\YourPassword;
use App\Models\FormSendRegister;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $form = FormSendRegister::all();

        return view('auth.register', ['form' => $form]);
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
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],

        ]);
        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Str::random(8),
        // ]);

        // if (!$user) {
        //     return response()->json(['message' => 'User not found'], 404);
        // }

        $r_password = Str::random(8);
        $user = $r_password;
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> Hash::make($r_password),
        ]);
// dd($user);
        Mail::to($user['email'])->send(new YourPassword($user,$r_password));

        event(new Registered($user));

        // Auth::login($user);


        return redirect()->back()->withSuccess('Registration completed successfully!');
    }
}
