<?php

namespace App\Http\Controllers;

use App\Models\Gift;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GiftController extends Controller
{
    private $gift;

    public function __construct(Gift $gift)
    {
        $this->gift = $gift;

        $this->middleware('auth');
    }

    public function index()
    {
        $gifts = Gift::all();
        return view('tenant.gifts.index', compact('gifts'));
    }

    public function create()
    {
        return view('tenant.gifts.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $gift = Gift::where('id', $request->id)->first();

        return view('tenant.gifts.update', compact('gift'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'name' => $request->name,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'numeric', 'min:9'],
            'value' => ['required', 'numeric', 'min:3'],
        ]);

        // $user = gift::where('id_user', $request->id_user)->first();
        $gift = Gift::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($gift) {
            return redirect()
                ->route('tenant.gifts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.gifts.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'name' => $request->name,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cost' => ['required', 'numeric', 'min:9'],
            'value' => ['required', 'numeric', 'min:3'],
        ]);
        $gift = Gift::create($payload);

        if ($gift->save()) {
            return redirect()
                ->route('tenant.gifts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.gifts.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $gift = Gift::where('id', $request->id)->delete();

        if ($gift) {
            return redirect()
                ->route('tenant.gifts.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.gifts.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
