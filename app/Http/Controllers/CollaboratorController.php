<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CollaboratorController extends Controller
{
    private $collaborator;

    public function __construct(Collaborator $collaborator)
    {
        $this->collaborator = $collaborator;

        $this->middleware('auth');
    }

    public function index()
    {
        $collaborators = Collaborator::all();
        return view('tenant.collaborators.index', compact('collaborators'));
    }

    public function create()
    {
        return view('tenant.collaborators.create');
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $collaborator = Collaborator::where('id', $request->id)->first();

        return view('tenant.collaborators.update', compact('collaborator'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'phone' => $request->phone,
            'name' => $request->name,
            'service' => $request->service,
            'value' => $request->value,
            'type' => $request->type,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:9'],
            'service' => ['required', 'string', 'min:3'],
            'value' => ['required', 'string', 'min:3'],
            'type' => ['string'],
        ]);

        // $user = Collaborator::where('id_user', $request->id_user)->first();
        $collaborator = Collaborator::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($collaborator) {
            return redirect()
                ->route('tenant.collaborators.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.collaborators.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'phone' => $request->phone,
            'name' => $request->name,
            'service' => $request->service,
            'value' => $request->value,
            'type' => $request->type,
        ];

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'min:9'],
            'service' => ['required', 'string', 'min:3'],
            'value' => ['required', 'string', 'min:3'],
            'type' => ['string'],
        ]);

        $collaborator = Collaborator::create($payload);

        if ($collaborator->save()) {
            return redirect()
                ->route('tenant.collaborators.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.collaborators.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $collaborator = Collaborator::where('id', $request->id)->delete();

        if ($collaborator) {
            return redirect()
                ->route('tenant.collaborators.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.collaborators.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
