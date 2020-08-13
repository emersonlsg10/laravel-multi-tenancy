<?php

namespace App\Http\Controllers;

use App\Models\UserTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    private $userTenant;

    public function __construct(UserTenant $userTenant)
    {
        $this->userTenant = $userTenant;

        $this->middleware('auth');
    }

    public function index()
    {
        $users = UserTenant::all();
        return view('tenant.users.index', compact('users'));
    }

    public function create()
    {
        return view('tenant.users.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $user = UserTenant::where('id_user', $request->id)->first();

        return view('tenant.users.update', compact('user'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        // confere se as senhas são iguais
        if ($request->password !== $request->confirm_password) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'As senhas não conferem!');
        }

        $checkEmail = UserTenant::where('email', $request->email)->first();

        if ($checkEmail->id_user != $request->id_user) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Esse email já foi cadastrado!');
        }

        $payload = [
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'name' => $request->name,
            'user_type' => $request->user_type,
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tenant.tenant_users'],
            'password' => ['required', 'string', 'min:6'],
            'confirm_password' => ['required', 'string', 'min:6'],
            'user_type' => ['string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        // $user = UserTenant::where('id_user', $request->id_user)->first();
        $user = UserTenant::where('id_user', $request->id_user)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($user) {
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
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
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:tenant.tenant_users'],
            'password' => ['required', 'string', 'min:6'],
            'confirm_password' => ['required', 'string', 'min:6'],
            'user_type' => ['string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        $user = UserTenant::create($payload);

        if ($user->save()) {
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.users.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $user = UserTenant::where('id_user', $request->id)->delete();

        if ($user) {
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.users.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
