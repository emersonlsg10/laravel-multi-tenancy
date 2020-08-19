<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Budget;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BudgetController extends Controller
{
    private $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;

        $this->middleware('auth');
    }

    public function index()
    {
        // $budgets = budget::all();

        $budgets = Budget::join('services', 'budgets.id_service', '=', 'services.id')
            ->select('budgets.*', 'services.model')
            ->get();

        return view('tenant.budgets.index', compact('budgets'));
    }

    public function create()
    {
        $services = Service::all();
        return view('tenant.budgets.create', compact('services'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $budget = Budget::where('id', $request->id)->first();
        $services = Service::all();

        return view('tenant.budgets.update', compact('budget', 'services'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_service' => $request->id_service,
            'value' => $request->value,
            'quantity' => $request->quantity,
            'budget_footage' => $request->budget_footage,
            'additional_apply' => $request->additional_apply,
            'additional_embroidery' => $request->additional_embroidery,
            'payment_budget' => $request->payment_budget,
            'budget_invoice' => $request->budget_invoice,
            'budget_type' => $request->budget_type,
            'phone' => $request->phone,
            'observation' => $request->observation,
        ];

        $request->validate([
            'id_service' => ['numeric'],
            'machine_id' => ['numeric'],
            'quantity' => ['numeric'],
            'budget_footage' => ['numeric'],
            'additional_apply' => ['numeric'],
            'additional_embroidery' => ['numeric'],
            'payment_budget' => ['string'],
            'budget_invoice' => ['string'],
            'budget_type' => ['string'],
            'phone' => ['string'],
            'observation' => ['string'],
        ]);

        // $user = budget::where('id_user', $request->id_user)->first();
        $budget = Budget::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($budget) {
            return redirect()
                ->route('tenant.budgets.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.budgets.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_service' => $request->id_service,
            'value' => $request->value,
            'quantity' => $request->quantity,
            'budget_footage' => $request->budget_footage,
            'additional_apply' => $request->additional_apply,
            'additional_embroidery' => $request->additional_embroidery,
            'payment_budget' => $request->payment_budget,
            'budget_invoice' => $request->budget_invoice,
            'budget_type' => $request->budget_type,
            'phone' => $request->phone,
            'observation' => $request->observation,
        ];

        $request->validate([
            'id_service' => ['numeric'],
            'machine_id' => ['numeric'],
            'quantity' => ['numeric'],
            'budget_footage' => ['numeric'],
            'additional_apply' => ['numeric'],
            'additional_embroidery' => ['numeric'],
            'payment_budget' => ['string'],
            'budget_invoice' => ['string'],
            'budget_type' => ['string'],
            'phone' => ['string'],
            'observation' => ['string'],
        ]);

        $budget = Budget::create($payload);

        if ($budget->save()) {
            return redirect()
                ->route('tenant.budgets.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.budgets.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $budget = Budget::where('id', $request->id)->delete();

        if ($budget) {
            return redirect()
                ->route('tenant.budgets.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.budgets.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
