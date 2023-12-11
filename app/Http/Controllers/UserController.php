<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        return view('pages.profile', [
            'title' => 'Profile',
            'user' => $user
        ]);
    }
}
