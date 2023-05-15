<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RoleController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

    Role::create($request->all());

      return redirect()->route("role.create");
    }
}
