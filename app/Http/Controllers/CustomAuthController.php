<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    public function login() {
        return view("auth.login");
    }

    public function registration() {
        return view("auth.registration");
    }

    public function registerUser(Request $request) {
        $request ->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'nim'=>'required|unique:users',
            'password'=>'required|min:4'
        ]);
        $user = new User;
        $user->name = $request->name;
        $user->nim = $request->nim;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res) {
            return back()->with('success', 'Berhasil teregistrasi');
        } else {
            return back()->with('fail', 'Gagal teregistrasi, kontak admin jika gagal berlanjut');
        }
    }

    public function loginUser(Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password salah');
            }
        } else {
            return back()->with('fail', 'Email belum teregistrasi');
        }
    }

    public function dashboard() {
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
            Session::put('data', $data);
        }
        return redirect('jadwal');
    }

    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            Session::pull('data');
            return redirect('jadwal');
        }
    }
}
