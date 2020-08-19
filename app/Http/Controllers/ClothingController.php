<?php

namespace App\Http\Controllers;

use App\Models\Clothing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClothingController extends Controller
{
    private $clothing;

    public function __construct(Clothing $clothing)
    {
        $this->clothing = $clothing;

        $this->middleware('auth');
    }

    public function index()
    {
        $clothings = Clothing::all();
        return view('tenant.clothings.index', compact('clothings'));
    }

    public function create()
    {
        return view('tenant.clothings.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $clothing = Clothing::where('id', $request->id)->first();

        return view('tenant.clothings.update', compact('clothing'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'name' => $request->name,
            'model' => $request->model,
            'cost' => $request->cost,
            'value' => $request->value,
            'observation' => $request->observation,
            'classification' => $request->classification,
            'size' => $request->size,
            'color' => $request->color,
            'quantity' => $request->quantity,
        ];

        $request->validate([
            'name' => ['string', 'max:255'],
            'model' => ['string'],
            'cost' => ['numeric'],
            'value' => ['numeric'],
            'observation' => ['string'],
            'classification' => ['string'],
            'size' => ['string'],
            'color' => ['string'],
            'quantity' => ['numeric'],
        ]);

        // $user = clothing::where('id_user', $request->id_user)->first();
        $clothing = Clothing::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($clothing) {
            return redirect()
                ->route('tenant.clothings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.clothings.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'name' => $request->name,
            'model' => $request->model,
            'cost' => $request->cost,
            'value' => $request->value,
            'observation' => $request->observation,
            'classification' => $request->classification,
            'size' => $request->size,
            'color' => $request->color,
            'quantity' => $request->quantity,
        ];

        $request->validate([
            'name' => ['string', 'max:255'],
            'model' => ['string'],
            'cost' => ['numeric'],
            'value' => ['numeric'],
            'observation' => ['string'],
            'classification' => ['string'],
            'size' => ['string'],
            'color' => ['string'],
            'quantity' => ['numeric'],
        ]);

        $clothing = Clothing::create($payload);

        if ($clothing->save()) {
            return redirect()
                ->route('tenant.clothings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.clothings.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $clothing = Clothing::where('id', $request->id)->delete();

        if ($clothing) {
            return redirect()
                ->route('tenant.clothings.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.clothings.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
