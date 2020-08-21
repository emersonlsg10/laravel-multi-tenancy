<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use App\Models\Cashier;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ShoppingController extends Controller
{
    private $shopping;

    public function __construct(Shopping $shopping)
    {
        $this->shopping = $shopping;

        $this->middleware('auth');
    }

    public function index()
    {
        // $shoppings = shopping::all();

        $shoppings = Shopping::join('cashiers', 'shoppings.id_cashier', '=', 'cashiers.id')
            ->select('shoppings.*', 'cashiers.name')
            ->get();

        return view('tenant.shoppings.index', compact('shoppings'));
    }

    public function create()
    {
        $cashiers = Cashier::all();
        return view('tenant.shoppings.create', compact('cashiers'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $shopping = Shopping::where('id', $request->id)->first();
        $cashiers = Cashier::all();

        return view('tenant.shoppings.update', compact('shopping', 'ca$cashiers'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_cashier' => $request->id_cashier,
            'name_shopping' => $request->name_shopping,
            'value' => $request->value,
            'quantity' => $request->quantity,
            'additional_apply' => $request->additional_apply,
            'additional_embroidery' => $request->additional_embroidery,
            'payment' => $request->payment,
            'phone' => $request->phone,
            'invoice_date' => $request->invoice_date,
            'shopping_type' => $request->shopping_type,
            'observation' => $request->observation,
        ];

        $request->validate([
            'id_cashier' => ['numeric'],
            'name_shopping' => ['string'],
            'value' => ['numeric'],
            'quantity' => ['numeric'],
            'additional_apply' => ['numeric'],
            'additional_embroidery' => ['numeric'],
            'payment' => ['string'],
            'phone' => ['string'],
            'invoice_date' => ['string'],
            'shopping_type' => ['string'],
            'observation' => ['string'],
        ]);

        // $user = shopping::where('id_user', $request->id_user)->first();
        $shopping = Shopping::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($shopping) {
            return redirect()
                ->route('tenant.shoppings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.shoppings.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_cashier' => $request->id_cashier,
            'name_shopping' => $request->name_shopping,
            'value' => $request->value,
            'quantity' => $request->quantity,
            'additional_apply' => $request->additional_apply,
            'additional_embroidery' => $request->additional_embroidery,
            'payment' => $request->payment,
            'phone' => $request->phone,
            'invoice_date' => $request->invoice_date,
            'shopping_type' => $request->shopping_type,
            'observation' => $request->observation,
        ];

        $request->validate([
            'id_cashier' => ['numeric'],
            'name_shopping' => ['string'],
            'value' => ['numeric'],
            'quantity' => ['numeric'],
            'additional_apply' => ['numeric'],
            'additional_embroidery' => ['numeric'],
            'payment' => ['string'],
            'phone' => ['string'],
            'invoice_date' => ['string'],
            'shopping_type' => ['string'],
            'observation' => ['string'],
        ]);

        $shopping = Shopping::create($payload);

        if ($shopping->save()) {
            return redirect()
                ->route('tenant.shoppings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.shoppings.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $shopping = Shopping::where('id', $request->id)->delete();

        if ($shopping) {
            return redirect()
                ->route('tenant.shoppings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.shoppings.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
