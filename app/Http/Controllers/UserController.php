<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(User $userBlog)
    {

        return view("blogs", [
            "blogs" => $userBlog->blogs
        ]);
    }
}
