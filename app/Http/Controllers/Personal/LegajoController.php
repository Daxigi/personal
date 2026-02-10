<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Per001;
use Inertia\Inertia;
use Inertia\Response;

class LegajoController extends Controller
{
    public function index(): Response
    {
        $legajos = Per001::query()
            ->select(['p01legajo', 'p01docum', 'p01apyn', 'p01sexo', 'p01fenac', 'p01nrocuil', 'p01restocuil', 'p01fealta'])
            ->orderBy('p01fealta', 'desc')
            ->get()
            ->map(fn (Per001 $row) => [
                'legajo' => $row->p01legajo,
                'documento' => $row->p01docum,
                'cuit1' => $row->p01nrocuil,
                'cuit2' => $row->p01restocuil,
                'apellidoNombre' => trim($row->p01apyn),
                'fechaNacimiento' => $row->p01fenac?->format('d/m/Y'),
                'fechaAlta' => $row->p01fealta?->format('d/m/Y'),
                'sexo' => trim($row->p01sexo),
            ]);

        return Inertia::render('Personal/Legajos', [
            'legajos' => $legajos,
        ]);
    }
}
