<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->password != $request->confirm_password) {
            return back()->withErrors([
                'password' => 'The passwords are not the same.',
            ])->onlyInput('password');
        }

        $email_exist = User::select('email')->where('email', $request->email)->get();    

        if (count($email_exist) > 0) {
            return back()->withErrors([
                'email' => 'The email is already in use.',
            ])->onlyInput('email');
        }

        $validate = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
            'remember_token' => Str::random(10),
        ]);

        User::create($validate);

        return redirect('login');
    }
}
