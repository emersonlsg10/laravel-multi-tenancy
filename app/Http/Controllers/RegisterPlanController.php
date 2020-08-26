<?php

namespace App\Http\Controllers;

use App\Models\Collaborator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterPlanController extends Controller
{
    // private $collaborator;

    // public function __construct(Collaborator $collaborator)
    // {
    //     $this->collaborator = $collaborator;

    //     $this->middleware('auth');
    // }

    public function index(Request $request)
    {
        dd($request->plan);
    }
}
