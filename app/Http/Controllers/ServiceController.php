<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Client;
use App\Models\Machine;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceController extends Controller
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;

        $this->middleware('auth');
    }

    public function index()
    {
        // $services = service::all();

        $services = Service::join('machines', 'services.machine_id', '=', 'machines.id')
            ->join('clients', 'services.id_client', '=', 'clients.id')
            ->select('services.*', 'clients.name', 'machines.model')
            ->get();

        return view('tenant.services.index', compact('services'));
    }

    public function create()
    {
        $clients = Client::all();
        $machines = Machine::all();
        return view('tenant.services.create', compact('clients', 'machines'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $service = Service::where('id', $request->id)->first();
        $clients = Client::all();
        $machines = Machine::all();

        return view('tenant.services.update', compact('service', 'clients', 'machines'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_client' => $request->id_client,
            'machine_id' => $request->machine_id,
            'model' => $request->model,
            'width' => $request->width,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'id_client' => ['numeric'],
            'machine_id' => ['numeric'],
            'model' => ['string'],
            'width' => ['numeric'],
            'cost' => ['numeric'],
            'value' => ['numeric'],
        ]);

        // $user = service::where('id_user', $request->id_user)->first();
        $service = Service::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($service) {
            return redirect()
                ->route('tenant.services.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.services.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_client' => $request->id_client,
            'machine_id' => $request->machine_id,
            'model' => $request->model,
            'width' => $request->width,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'id_client' => ['numeric'],
            'machine_id' => ['numeric'],
            'model' => ['string'],
            'width' => ['numeric'],
            'cost' => ['numeric'],
            'value' => ['numeric'],
        ]);

        $service = Service::create($payload);

        if ($service->save()) {
            return redirect()
                ->route('tenant.services.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.services.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $service = Service::where('id', $request->id)->delete();

        if ($service) {
            return redirect()
                ->route('tenant.services.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.services.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
