<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Idiomas soportados por la aplicación.
     *
     * @var array<int, string>
     */
    protected array $supportedLocales = ['es', 'ca', 'en'];

    /**
     * Handle an incoming request.
     *
     * Determina el idioma a utilizar siguiendo este orden de prioridad:
     *  1. Preferencia guardada manualmente en sesión por el usuario.
     *  2. Idioma preferido del navegador (cabecera Accept-Language).
     *  3. Idioma por defecto configurado en la aplicación.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->session()->get('locale');

        if (! $locale || ! in_array($locale, $this->supportedLocales, true)) {
            $locale = $this->detectBrowserLocale($request) ?? config('app.locale');
        }

        app()->setLocale($locale);

        return $next($request);
    }

    /**
     * Analiza la cabecera Accept-Language del navegador y devuelve
     * el primer idioma soportado que coincida, o null si ninguno coincide.
     */
    protected function detectBrowserLocale(Request $request): ?string
    {
        $header = $request->server('HTTP_ACCEPT_LANGUAGE');

        if (! $header) {
            return null;
        }

        // Ejemplo de cabecera: "ca-ES,ca;q=0.9,es-ES;q=0.8,es;q=0.7,en-US;q=0.6,en;q=0.5"
        $languages = [];

        foreach (explode(',', $header) as $part) {
            $pieces = explode(';', trim($part));
            $lang = strtolower(trim($pieces[0]));
            $quality = 1.0;

            if (isset($pieces[1]) && str_starts_with(trim($pieces[1]), 'q=')) {
                $quality = (float) substr(trim($pieces[1]), 2);
            }

            $languages[$lang] = $quality;
        }

        arsort($languages);

        foreach (array_keys($languages) as $lang) {
            // Normaliza "ca-es" -> "ca", "en-us" -> "en", etc.
            $short = substr($lang, 0, 2);

            if (in_array($short, $this->supportedLocales, true)) {
                return $short;
            }
        }

        return null;
    }
}
