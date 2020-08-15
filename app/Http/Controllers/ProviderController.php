<?php

namespace App\Http\Controllers;

use App\Models\Provider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProviderController extends Controller
{
    private $provider;

    public function __construct(Provider $provider)
    {
        $this->provider = $provider;

        $this->middleware('auth');
    }

    public function index()
    {
        $providers = Provider::all();
        return view('tenant.providers.index', compact('providers'));
    }

    public function create()
    {
        return view('tenant.providers.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $provider = Provider::where('id', $request->id)->first();

        return view('tenant.providers.update', compact('provider'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'name_company' => $request->name_company,
            'provider_representant' => $request->provider_representant,
            'phone' => $request->phone,
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name_company' => ['required', 'string', 'max:255'],
            'provider_representant' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        // $user = provider::where('id_user', $request->id_user)->first();
        $provider = Provider::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($provider) {
            return redirect()
                ->route('tenant.providers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.providers.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'name_company' => $request->name_company,
            'provider_representant' => $request->provider_representant,
            'phone' => $request->phone,
            'cep'=> $request->cep,
            'logradouro'=> $request->logradouro,
            'numero'=> $request->numero,
            'bairro'=> $request->bairro,
            'cidade'=> $request->cidade,
            'estado'=> $request->estado,
        ];

        $request->validate([
            'name_company' => ['required', 'string', 'max:255'],
            'provider_representant' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'cep' => ['string'],
            'logradouro' => ['string'],
            'numero' => ['string'],
            'bairro' => ['string'],
            'cidade' => ['string'],
            'estado' => ['string'],
        ]);

        $provider = Provider::create($payload);

        if ($provider->save()) {
            return redirect()
                ->route('tenant.providers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.providers.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $provider = Provider::where('id', $request->id)->delete();

        if ($provider) {
            return redirect()
                ->route('tenant.providers.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.providers.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
