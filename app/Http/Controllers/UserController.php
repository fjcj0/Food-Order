<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Laravel\Sanctum\HasApiTokens;
class UserController
{
    public function Registeration()
    {
        $user = request()->validate([
            'name' => ['required', 'min:4'],
            'username' => ['required', 'min:5','unique:users,username,' . Auth::id()],
            'email' => ['required', 'email','unique:users,email,' . Auth::id()],
            'password' => ['required', Password::min(6), 'confirmed'],
        ]);
        $user = User::create([
            'name' => $user['name'],
            'username' => $user['username'],
            'email' => $user['email'],
            'password' => $user['password']
        ]);
        $token = $user->createToken('MyApp',expiresAt:now()->addDay())->plainTextToken;
        session(['user_token'=>$token]);
        Auth::login($user);
        return redirect('/');
    }
    public function Login()
    {
        $credentials = request()->validate([
            'username' => ['required', 'min:5'],
            'password' => ['required', Password::min(6)],
        ]);
        if (!Auth::attempt($credentials)) {
            throw ValidationException::withMessages([
                'username' => 'Sorry, the username or password does not match.',
            ]);
        }
        request()->session()->regenerate();
        $user = Auth::user();
        $token = $user->createToken('MyApp',expiresAt:now()->addDay())->plainTextToken;
        session()->put('user_token', $token);
        return redirect('/');
    }
    public function Logout(){
        Auth::user()->tokens->each(function ($token) {
            $token->delete();
        });
        session()->forget('user_token');
        Auth::logout();
        return redirect('/login');
    }
    public function EditUserData(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:4'],
            'username' => ['required', 'min:5', 'unique:users,username,' . Auth::id()],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::id()],
            'password' => ['nullable', Password::min(6), 'confirmed'],
        ]);
        $user = Auth::user();
        $user->name = $validatedData['name'];
        $user->username = $validatedData['username'];
        $user->email = $validatedData['email'];
        if (!empty($validatedData['password'])) {
            $user->password = bcrypt($validatedData['password']);
        }
        $user->save();
        return redirect('/dashboard/profile')->with('success', 'Your data has been updated successfully.');
    }
}
