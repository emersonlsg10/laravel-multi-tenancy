<?php

namespace App\Http\Controllers;

use App\Models\Receipt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ReceiptController extends Controller
{
    private $receipt;

    public function __construct(Receipt $receipt)
    {
        $this->receipt = $receipt;

        $this->middleware('auth');
    }

    public function index()
    {
        $receipts = Receipt::all();
        return view('tenant.receipts.index', compact('receipts'));
    }

    public function create()
    {
        return view('tenant.receipts.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $receipt = Receipt::where('id', $request->id)->first();

        return view('tenant.receipts.update', compact('receipt'));
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

        // $user = receipt::where('id_user', $request->id_user)->first();
        $receipt = Receipt::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($receipt) {
            return redirect()
                ->route('tenant.receipts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.receipts.create', ['prefix' => \Request::route('prefix')])
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
        $receipt = Receipt::create($payload);

        if ($receipt->save()) {
            return redirect()
                ->route('tenant.receipts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.receipts.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $receipt = Receipt::where('id', $request->id)->delete();

        if ($receipt) {
            return redirect()
                ->route('tenant.receipts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.receipts.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
