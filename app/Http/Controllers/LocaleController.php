<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    /**
     * Idiomas soportados por la aplicación.
     *
     * @var array<int, string>
     */
    protected array $supportedLocales = ['es', 'ca', 'en'];

    /**
     * Cambia el idioma de la aplicación y lo guarda en sesión
     * para que prevalezca sobre la detección automática del navegador.
     */
    public function switch(Request $request, string $locale): RedirectResponse
    {
        if (in_array($locale, $this->supportedLocales, true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
