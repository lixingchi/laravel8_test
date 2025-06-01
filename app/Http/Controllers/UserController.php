<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(User $user)
    {
        var_dump(compact('user'));
        return view('users.show', compact('user'));
    }
}
