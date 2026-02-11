<?php

namespace App\Http\Controllers\Personal;

use App\Http\Controllers\Controller;
use App\Models\Per001;
use App\Models\Scm005;
use App\Models\Scm006;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Inertia\Response;

class LegajoController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Personal/Legajos', [
            'legajos' => $this->getLegajosForTable(),
            'tiposDocumento' => $this->getTiposDocumento(),
            'provincias' => $this->getProvincias(),
        ]);
    }

    public function show(Per001 $legajo): Response
    {
        return Inertia::render('Personal/Legajos', [
            'legajos' => $this->getLegajosForTable(),
            'tiposDocumento' => $this->getTiposDocumento(),
            'provincias' => $this->getProvincias(),
            'legajoEditando' => [
                'legajo' => $legajo->p01legajo,
                'tipodoc' => $legajo->p01tipodoc,
                'documento' => $legajo->p01docum,
                'apellido' => trim(explode(',', $legajo->p01apyn ?? '')[0]),
                'nombres' => trim(explode(',', $legajo->p01apyn ?? '')[1] ?? ''),
                'sexo' => trim($legajo->p01sexo ?? ''),
                'estadoCivil' => trim($legajo->p01estcivil ?? ''),
                'fechaNacimiento' => $legajo->p01fenac?->format('Y-m-d'),
                'localidadNac' => trim($legajo->p01locnac ?? ''),
                'provinciaNac' => $legajo->p01idpcianac,
                'paisNac' => trim($legajo->p01paisnac ?? ''),
                'nacionalizado' => $legajo->p01feadonac?->format('Y-m-d'),
                'domicilio' => trim($legajo->p01domicilio ?? ''),
                'localidadDom' => trim($legajo->p01locdom ?? ''),
                'provinciaDom' => $legajo->p01idpciadom,
                'email' => trim($legajo->p01email ?? ''),
                'telefono' => trim($legajo->telefono ?? ''),
                'comentarios' => trim($legajo->p01comentarios ?? ''),
                'cuit1' => $legajo->p01nrocuil,
                'cuit2' => $legajo->p01restocuil,
                'localizacion' => $this->getLocalizacion($legajo->id_anexo_ubi),
            ],
        ]);
    }

    private function getLegajosForTable()
    {
        return Per001::query()
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
    }

    private function getTiposDocumento()
    {
        return Scm005::select('c05tipodoc', DB::raw("substring(c05descr,1,23) as c05descr"))
            ->orderBy('c05tipodoc', 'desc')
            ->get()
            ->map(fn (Scm005 $row) => [
                'value' => $row->c05tipodoc,
                'label' => trim($row->c05descr),
            ])
            ->values();
    }

    private function getLocalizacion(?int $idAnexoUbi): ?string
    {
        if (!$idAnexoUbi) {
            return null;
        }

        $resultado = DB::selectOne("
            SELECT s.descripcion as desc_anexo, s01.c01leyen
            FROM public.scm001_ubi_anexo s
            LEFT JOIN patrim.bpat_par003 p ON p.pr03id = s.pr03id
            LEFT JOIN public.scm001 s01 ON s.c01depresu = s01.c01depresu
            WHERE s.id_anexo_ubi = ?
        ", [$idAnexoUbi]);

        if (!$resultado) {
            return null;
        }

        return trim(($resultado->c01leyen ?? '') . ' - ' . ($resultado->desc_anexo ?? ''), ' -');
    }

    private function getProvincias()
    {
        return Scm006::orderBy('c06pcia', 'asc')
            ->get()
            ->map(fn (Scm006 $row) => [
                'value' => $row->c06id,
                'label' => trim($row->c06pcia),
            ])
            ->values();
    }
}
