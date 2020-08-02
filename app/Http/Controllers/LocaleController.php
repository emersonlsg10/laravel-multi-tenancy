<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class LocaleController extends Controller
{
    public function lang($locale)
    {
        App::setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
