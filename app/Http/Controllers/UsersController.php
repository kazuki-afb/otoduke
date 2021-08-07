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
            'image_icon' => $user->image_icon,
            'comment' => $user->user_comment
        ]);
    }

}
