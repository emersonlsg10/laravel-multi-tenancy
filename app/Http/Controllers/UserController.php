<?php

namespace App\Http\Controllers;

use App\Models\UserTenant;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserTenant::all();
        return view('tenant.users.index', compact('users'));
    }

    public function create()
    {
        return view('tenant.users.create');
    }
}
