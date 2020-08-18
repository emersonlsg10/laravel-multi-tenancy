<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MachineController extends Controller
{
    private $machine;

    public function __construct(Machine $machine)
    {
        $this->machine = $machine;

        $this->middleware('auth');
    }

    public function index()
    {
        $machines = Machine::all();
        return view('tenant.machines.index', compact('machines'));
    }

    public function create()
    {
        return view('tenant.machines.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $machine = Machine::where('id', $request->id)->first();

        return view('tenant.machines.update', compact('machine'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'model' => $request->model,
            'width' => $request->width,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'model' => ['required', 'string', 'max:255'],
            'width' => ['required', 'numeric', 'max:255'],
            'cost' => ['required', 'numeric', 'min:9'],
            'value' => ['required', 'numeric', 'min:3'],
        ]);

        // $user = machine::where('id_user', $request->id_user)->first();
        $machine = Machine::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($machine) {
            return redirect()
                ->route('tenant.machines.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.machines.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'model' => $request->model,
            'width' => $request->width,
            'cost' => $request->cost,
            'value' => $request->value,
        ];

        $request->validate([
            'model' => ['required', 'string', 'max:255'],
            'width' => ['required', 'numeric', 'max:255'],
            'cost' => ['required', 'numeric', 'min:9'],
            'value' => ['required', 'numeric', 'min:3'],
        ]);
        
        $machine = Machine::create($payload);

        if ($machine->save()) {
            return redirect()
                ->route('tenant.machines.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.machines.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $machine = Machine::where('id', $request->id)->delete();

        if ($machine) {
            return redirect()
                ->route('tenant.machines.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.machines.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
