<?php

namespace App\Http\Controllers;

// use App\Models\Machine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use MercadoPago;

class PaymentController extends Controller
{
    // private $machine;

    // public function __construct(MercadoPago $machine)
    // {
    //     $this->machine = $machine;

    //     $this->middleware('auth');
    // }

    public function index()
    {
        MercadoPago\SDK::setClientId("TEST-d635380f-6b3c-4b16-9893-f36472e8911d");
        MercadoPago\SDK::setClientSecret("TEST-1664937565061732-010321-ccfa5efb2014cef7c9b1201808f26085-247120813");

        $filters = array(
            "external_reference" => 123
        );

        $payment = MercadoPago\Payment::get(
            "/v1/payments/search",
            array(
                "begin_date" => "NOW-2HOURS",
                "end_date" => "NOW",
                "range" => "date_last_updated",
                "sort" => "date_last_updated",
                "criteria" => "desc"
            )
        );

        dd($payment, 'teste');
    }
}
