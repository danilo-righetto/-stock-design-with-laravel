<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function logout()
    {
        \Auth::logout();
        return redirect('/login');
    }
}
