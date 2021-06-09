<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class UsersController extends Controller
{
    //method create
    public function index()
    {
        return view('user');
    }

    public function show()
    {
        $message = 'マイページ';
        $user = auth()->user();
        return view('user',[
            'message' => $message,
            'id' => $user->id,
            'name' => $user->name,
            'comment' => $user->user_comment
        ]);
    }

}
