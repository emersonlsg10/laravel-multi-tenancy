<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    private $account;

    public function __construct(Account $account)
    {
        $this->account = $account;

        $this->middleware('auth');
    }

    public function index()
    {
        $accounts = Account::all();
        return view('tenant.accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('tenant.accounts.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $account = Account::where('id', $request->id)->first();

        return view('tenant.accounts.update', compact('account'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'status' => $request->status,
            'name' => $request->name,
            'due_date' => $request->due_date,
            'value' => $request->value,
            'observation' => $request->observation,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string'],
            'due_date' => ['required', 'string'],
            'value' => ['required', 'numeric'],
            'observation' => ['required', 'string'],
        ]);

        // $user = account::where('id_user', $request->id_user)->first();
        $account = Account::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($account) {
            return redirect()
                ->route('tenant.accounts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.accounts.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'status' => $request->status,
            'name' => $request->name,
            'due_date' => $request->due_date,
            'value' => $request->value,
            'observation' => $request->observation,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string'],
            'due_date' => ['required', 'string'],
            'value' => ['required', 'numeric'],
            'observation' => ['required', 'string'],
        ]);
        $account = Account::create($payload);

        if ($account->save()) {
            return redirect()
                ->route('tenant.accounts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.accounts.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $account = Account::where('id', $request->id)->delete();

        if ($account) {
            return redirect()
                ->route('tenant.accounts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.accounts.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
