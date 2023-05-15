<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create():\Illuminate\View\View{
      return view('users_create');
    }
    public function store(UserRequest $request):RedirectResponse
    {

    User::create($request->all());

      return redirect()->route("user.create");
    }
}
