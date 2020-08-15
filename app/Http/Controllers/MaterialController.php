<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Provider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MaterialController extends Controller
{
    private $material;

    public function __construct(Material $material)
    {
        $this->material = $material;

        $this->middleware('auth');
    }

    public function index()
    {
        // $materials = Material::all();

        $materials = Material::join('providers', 'materials.id_provider', '=', 'providers.id')
            ->select('materials.*', 'providers.name_company')
            ->get();

        return view('tenant.materials.index', compact('materials'));
    }

    public function create()
    {
        $providers = Provider::all();
        return view('tenant.materials.create', compact('providers'));
    }

    public function edit(Request $request)
    {
        //encontra usuário no BD
        $material = Material::where('id', $request->id)->first();
        $providers = Provider::all();

        return view('tenant.materials.update', compact('material', 'providers'));
    }

    public function updateRegister(Request $request)
    {
        //pega todos os campos exeto token
        $data = $request->except('_token');

        $payload = [
            'id_provider' => $request->id_provider,
            'type' => $request->type,
            'category' => $request->category,
            'color' => $request->color,
            'measure' => $request->measure,
            'quantity' => $request->quantity,
            'size' => $request->size,
        ];

        $request->validate([
            'id_provider' => ['numeric'],
            'type' => ['string'],
            'category' => ['string'],
            'color' => ['string'],
            'measure' => ['string'],
            'quantity' => ['string'],
            'size' => ['string'],
        ]);

        // $user = material::where('id_user', $request->id_user)->first();
        $material = Material::where('id', $request->id)
            ->update($payload);
        //se tudo ocorrer bem, atualiza e volta para o perfil
        if ($material) {
            return redirect()
                ->route('tenant.materials.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao atualizar.");
        }

        //se der alguma falha, volta para a home com msg de falha
        return redirect()
            ->route('tenant.materials.create', ['prefix' => \Request::route('prefix')])
            ->with('error', "Falha ao atualizar. Tente novamente!!");
    }
    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'id_provider' => $request->id_provider,
            'type' => $request->type,
            'category' => $request->category,
            'color' => $request->color,
            'measure' => $request->measure,
            'quantity' => $request->quantity,
            'size' => $request->size,
        ];

        $request->validate([
            'id_provider' => ['numeric'],
            'type' => ['string'],
            'category' => ['string'],
            'color' => ['string'],
            'measure' => ['string'],
            'quantity' => ['string'],
            'size' => ['string'],
        ]);

        $material = Material::create($payload);

        if ($material->save()) {
            return redirect()
                ->route('tenant.materials.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('tenant.materials.create', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }

    public function delete(Request $request)
    {
        //encontra usuário no BD
        $material = Material::where('id', $request->id)->delete();

        if ($material) {
            return redirect()
                ->route('tenant.materials.index', ['prefix' => \Request::route('prefix')])
                ->with('success', "Sucesso ao deletar!");
        } else {
            return redirect()
                ->route('tenant.materials.index', ['prefix' => \Request::route('prefix')])
                ->with('error', 'Falha ao deletar!');
        }
    }
}
