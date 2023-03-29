<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class UsersController extends Controller
{
    public function index() {
        $users = users::all();
        return view('tesAmbilData', ['usersList' => $users]);
    }

    public function register(Request $request) {
        // $user = new users;
        // $user->username = $request->username;
        // $user->name = $request->name;
        // $user->nim = $request->nim;
        // $user->password = $request->password;
        // $user->save();
        $user = users::create($request->all());
        return redirect('/login');
    }
}
