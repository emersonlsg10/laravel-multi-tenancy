<?php

namespace App\Http\Controllers;

use App\Models\Cashier;
use App\Models\UserTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CashierController extends Controller
{
    private $cashier;

    public function __construct(Cashier $cashier)
    {
        $this->cashier = $cashier;

        $this->middleware('auth');
    }

    public function index()
    {
        $cashiers = Cashier::join('tenant_users', 'cashiers.id_user', '=', 'tenant_users.id_user')
            ->select('cashiers.*', 'tenant_users.name', 'tenant_users.id_user')
            ->get();

        return view('tenant.cashiers.index', compact('cashiers'));
    }

    public function create()
    {
        $users = UserTenant::all();
        return view('tenant.cashiers.create', compact('users'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $cashier = Cashier::where('id', $request->id)->first();
        $users = UserTenant::all();

        return view('tenant.cashiers.update', compact('cashier', 'users'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_user' => $request->id_user,
            'name_cashier' => $request->name_cashier,
            'class' => $request->class,
            'status' => $request->status,
            'type' => $request->type,
            'setor' => $request->setor,
            'value' => $request->value,
            'description' => $request->description,
        ];

        $request->validate([
            'id_user' => ['required', 'numeric'],
            'name_cashier' => ['required', 'string'],
            'class' => ['required', 'string'],
            'status' => ['required', 'string'],
            'type' => ['required', 'string'],
            'setor' => ['required', 'string'],
            'value' => ['required', 'numeric'],
            'description' => ['string'],
        ]);

        // $user = cashier::where('id_user', $request->id_user)->first();
        $cashier = Cashier::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($cashier) {
            return redirect()
                ->route('tenant.cashiers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.cashiers.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_user' => $request->id_user,
            'name_cashier' => $request->name_cashier,
            'class' => $request->class,
            'status' => $request->status,
            'type' => $request->type,
            'setor' => $request->setor,
            'value' => $request->value,
            'description' => $request->description,
        ];

        $request->validate([
            'id_user' => ['required', 'numeric'],
            'name_cashier' => ['required', 'string'],
            'class' => ['required', 'string'],
            'status' => ['required', 'string'],
            'type' => ['required', 'string'],
            'setor' => ['required', 'string'],
            'value' => ['required', 'numeric'],
            'description' => ['string'],
        ]);

        $cashier = Cashier::create($payload);

        if ($cashier->save()) {
            return redirect()
                ->route('tenant.cashiers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.cashiers.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $cashier = Cashier::where('id', $request->id)->delete();

        if ($cashier) {
            return redirect()
                ->route('tenant.cashiers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.cashiers.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
