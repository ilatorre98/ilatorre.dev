<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class CvDownloadController extends Controller
{
    /**
     * Idiomas soportados y su archivo de CV correspondiente.
     *
     * @var array<int, string>
     */
    protected array $supportedLocales = ['es', 'ca', 'en'];

    /**
     * Entrega el PDF del currículum correspondiente al idioma
     * actualmente activo en la aplicación (sesión / navegador).
     */
    public function __invoke(): BinaryFileResponse
    {
        $locale = app()->getLocale();

        if (! in_array($locale, $this->supportedLocales, true)) {
            $locale = $this->supportedLocales[0];
        }

        $path = public_path("downloads/cv_{$locale}.pdf");

        if (! is_file($path)) {
            abort(Response::HTTP_NOT_FOUND, 'El CV solicitado no está disponible todavía.');
        }

        return response()->download($path, "Iker-Latorre-CV-{$locale}.pdf");
    }
}
