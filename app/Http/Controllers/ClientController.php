<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;

        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::all();
        return view('tenant.clients.index', compact('clients'));
    }

    public function create()
    {
        return view('tenant.clients.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $client = Client::where('id', $request->id)->first();

        return view('tenant.clients.update', compact('client'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $checkEmail = Client::where('email', $request->email)->first();

        if ($checkEmail->id != $request->id) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.clients.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Esse email já foi cadastrado!');
        }

        $payload = [
            'name' => $request->name,
            'email' => $request->email,
            'profile_client' => $request->profile_client,
            'observation' => $request->observation,
            'phone' => $request->phone,
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'profile_client' => ['required', 'string'],
            'observation' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        // $user = client::where('id_user', $request->id_user)->first();
        $client = Client::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($client) {
            return redirect()
                ->route('tenant.clients.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.clients.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $checkEmail = Client::where('email', $request->email)->first();

        if ($checkEmail) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('tenant.clients.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Esse email já foi cadastrado!');
        }

        $payload = [
            'name' => $request->name,
            'email' => $request->email,
            'profile_client' => $request->profile_client,
            'observation' => $request->observation,
            'phone' => $request->phone,
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'profile_client' => ['required', 'string'],
            'observation' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        $client = Client::create($payload);

        if ($client->save()) {
            return redirect()
                ->route('tenant.clients.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.clients.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $client = Client::where('id', $request->id)->delete();

        if ($client) {
            return redirect()
                ->route('tenant.clients.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.clients.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
