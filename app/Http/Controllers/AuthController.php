<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
      
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        // $credentials = $request->only(
        //     'email',
        //     'password'
        // );

        if (Auth::attempt($data)) {
            // Pengguna berhasil login
            session()->put('logged_in', true);
            return redirect('/warga')->with('login', 'Berhasil login');
        } else {
            // Jika login gagal, kembalikan ke halaman login dengan pesan error
            return redirect()
                ->back()
                ->withErrors('Username atau password salah');
        }

        // if ('email' == 'fagil@gmail.com' && 'password'== '123'){
        //     return view('dashboard');
        // }
        // else {
        //     return redirect()->back()->withErrors(['login'=>'Username atau password salah']);
        // }
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([        
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ],[
            'email.unique'=>'Email sudah di gunakan',
            'password.min'=>'Kata sandi minimal 8 karakter'
        ]);

        

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect('/login')->with(['register' => 'Register berhasil']);
    }

    public function logout()
    {
        Auth::logout();
        session()->forget('logged_in');
        return redirect('/login');
    }
}
