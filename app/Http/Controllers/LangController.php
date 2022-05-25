<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LangController extends Controller
{
    public function change(string $locale): RedirectResponse
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
