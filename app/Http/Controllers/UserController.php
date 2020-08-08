<?php

namespace App\Http\Controllers;

use App\Models\UserTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    public function edit($id)
    {
        // Get the current URL without the query string...
        echo url()->current();
        // return view('tenant.users.create');
    }

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        // confere se as senhas são iguais
        if ($request->password !== $request->confirm_password) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'As senhas não conferem!');
        }

        $checkEmail = UserTenant::where('email', $request->email)->first();

        if ($checkEmail) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Esse email já foi cadastrado!');
        }

        $payload = [
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'name' => $request->name,
            'user_type' => $request->user_type,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tenant.tenant_users'],
            'password' => ['required', 'string', 'min:6'],
            'confirm_password' => ['required', 'string', 'min:6'],
            'user_type' => ['string'],
        ]);

        $user = UserTenant::create($payload);

        if ($user->save()) {
            return redirect()
                ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }
}
