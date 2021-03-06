<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\UserTenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Console\Commands;
use Artisan;

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

        switch ($request->comp_plan) {
            case 1:
                $planName = "mensal";
                break;
            case 2:
                $planName = "semestral";
                break;
            case 4:
                $planName = "anual";
                break;
            default:
                $planName = "mensal";
        };


        // confere se as senhas são iguais
        if ($request->comp_password !== $request->confirm_password) {
            //se der alguma falha, volta para a home com msg de falha
            return redirect()
                ->route('register-plan.create', ['plan' => $planName])
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
            'comp_password' => Hash::make($request->comp_password),
            'comp_language' => $request->comp_language,
            'comp_plan' => $request->comp_plan,
            'comp_status' => 2,
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
            'comp_status' => ['numeric'],
            'prefix' => ['required', 'unique:companies', 'string', 'min:3'],
            'database' => ['string', 'min:3'],
        ]);

        $company = Company::create($payload);

        if ($company->save()) {


            $comp = Company::where('prefix', $request->prefix)->first();

            $command = "company:create " . $comp->comp_id;

            Artisan::call($command);

            $payload = [
                'name' => $request->comp_name,
                'email' => $request->comp_email,
                'user_type' => 1,
                'password' => Hash::make($request->comp_password),
            ];

            $user = UserTenant::where('id_user', 1)
                ->update($payload);

            //se tudo ocorrer bem, atualiza e volta para o perfil
            if ($user) {
                return redirect(url("/" . $request->prefix . "/login"));
            }

            return redirect()
                ->route('register-plan.create', ['plan' => $planName])
                ->with('success', "Sucesso ao cadastrar, entre em contato com o suporte para receber seu dados de login!");
        } else {
            return redirect()
                ->route('register-plan.create', ['plan' => $planName])
                ->with('error', 'Falha ao cadastrar!!');
        }
    }
}
