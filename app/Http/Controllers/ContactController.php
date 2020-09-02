<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    private $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;

        // $this->middleware('auth');
    }

    /**
     * @param Request $request
     */
    public function register(Request $request)
    {
        $payload = [
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'contact_message' => $request->contact_message,
        ];

        $request->validate([
            'contact_name' => ['required', 'string', 'min:3',],
            'contact_email' => ['required', 'string', 'min:3'],
            'contact_message' => ['required', 'string', 'min:3', 'max:255'],
        ]);

        $contact = Contact::create($payload);

        if ($contact->save()) {

            return redirect()
                ->back()
                ->with('success', "Mensagem enviada com sucesso!");
        } else {
            return redirect()
                ->back()
                ->with('error', 'Falha ao enviar mensagem!');
        }
    }
}
