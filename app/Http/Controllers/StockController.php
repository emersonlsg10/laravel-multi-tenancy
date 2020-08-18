<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Stock;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StockController extends Controller
{
    private $stock;

    public function __construct(Stock $stock)
    {
        $this->stock = $stock;

        $this->middleware('auth');
    }

    public function index()
    {
        // $stocks = stock::all();

        $stocks = Stock::join('materials', 'stocks.id_material', '=', 'materials.id')
            ->select('stocks.*', 'materials.type')
            ->get();
                        
        return view('tenant.stocks.index', compact('stocks'));
    }

    public function create()
    {
        $materials = Material::all();
        return view('tenant.stocks.create', compact('materials'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $stock = Stock::where('id', $request->id)->first();
        $materials = Material::all();

        return view('tenant.stocks.update', compact('stock', 'materials'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_material' => $request->id_material,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'payment_form' => $request->payment_form,
            'unit_value' => $request->unit_value,
            'stock_value' => $request->stock_value,
        ];

        $request->validate([
            'id_material' => ['numeric'],
            'quantity' => ['string'],
            'description' => ['string'],
            'payment_form' => ['string'],
            'unit_value' => ['string'],
            'stock_value' => ['string'],
        ]);

        // $user = stock::where('id_user', $request->id_user)->first();
        $stock = Stock::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($stock) {
            return redirect()
                ->route('tenant.stocks.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.stocks.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_material' => $request->id_material,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'payment_form' => $request->payment_form,
            'unit_value' => $request->unit_value,
            'stock_value' => $request->stock_value,
        ];

        $request->validate([
            'id_material' => ['numeric'],
            'quantity' => ['string'],
            'description' => ['string'],
            'payment_form' => ['string'],
            'unit_value' => ['string'],
            'stock_value' => ['string'],
        ]);

        $stock = Stock::create($payload);

        if ($stock->save()) {
            return redirect()
                ->route('tenant.stocks.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.stocks.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $stock = Stock::where('id', $request->id)->delete();

        if ($stock) {
            return redirect()
                ->route('tenant.stocks.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.stocks.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
