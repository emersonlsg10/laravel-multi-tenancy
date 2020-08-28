<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Console\Commands;

class RegisterPlanController extends Controller
{
    private $company;

    public function __construct(Company $company)
    {
        $this->company = $company;

        // $this->middleware('auth');
    }

    public function create(Request $request)
    {
        $plan = $request->plan;
        return view('companies-register.create', compact('plan'));
    }

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        // confere se as senhas são iguais
        if ($request->comp_password !== $request->confirm_password) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('register-plan.create')
                ->with('error', 'As senhas não conferem!');
        }

        $database = "tenant_" . Str::random(16);
        $payload = [
            'comp_name' => $request->comp_name,
            'comp_document' => $request->comp_document,
            'comp_currency' => $request->comp_currency,
            'comp_country' => $request->comp_country,
            'comp_address' => $request->comp_address,
            'comp_phone' => $request->comp_phone,
            'comp_whatsapp' => $request->comp_whatsapp,
            'comp_email' => $request->comp_email,
            'comp_username' => $request->comp_username,
            'comp_password' => $request->comp_password,
            'comp_language' => $request->comp_language,
            'comp_plan' => $request->comp_plan,
            'prefix' => $request->prefix,
            'database' => $database,
        ];

        $request->validate([
            'comp_name' => ['required', 'string', 'min:3', 'max:255'],
            'comp_document' => ['required', 'string', 'min:3'],
            'comp_currency' => ['required', 'string', 'min:3'],
            'comp_country' => ['required', 'string', 'min:3'],
            'comp_address' => ['required', 'string', 'min:3'],
            'comp_phone' => ['required', 'string', 'min:3'],
            'comp_whatsapp' => ['required', 'string', 'min:3'],
            'comp_email' => ['required', 'unique:companies', 'string', 'min:3'],
            'comp_username' => ['required', 'string', 'min:3'],
            'comp_password' => ['required', 'string', 'min:3'],
            'comp_language' => ['required', 'string', 'min:3'],
            'comp_plan' => ['required', 'numeric'],
            'prefix' => ['required', 'string', 'min:3'],
            'database' => ['required', 'string', 'min:3'],
        ]);
        $gift = Company::create($payload);

        if ($gift->save()) {


            // $command = new Commands;
            // $command->createTenant();

            return redirect()
                ->route('register-plan.create')
                ->with('success', "Sucesso ao cadastrar!");
        } else {
            return redirect()
                ->route('register-plan.create')
                ->with('error', 'Falha ao cadastrar!!');
        }
    }
}
