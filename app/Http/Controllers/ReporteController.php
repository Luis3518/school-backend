<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AlumnosExport;

class ReporteController extends Controller
{
    private function getFilteredAlumnos(Request $request)
    {
        $query = Alumno::query();
       
        if ($request->has('curso') && $request->curso != '') {
            $query->where('curso_id', $request->curso);
        }
       
        return $query->with('curso')->get();
    }

    public function generarPDF(Request $request)
    {
        $alumnos = $this->getFilteredAlumnos($request);
        $pdf = Pdf::loadView('reportes.alumnos_pdf', compact('alumnos'));
        return $pdf->download('reporte_alumnos.pdf');
    }

    public function generarExcel(Request $request)
    {
        $alumnos = $this->getFilteredAlumnos($request);
        return Excel::download(new AlumnosExport($alumnos), 'alumnos.xlsx');
    }

    public function vistaImprimir(Request $request)
    {
        $alumnos = $this->getFilteredAlumnos($request);
        return view('reportes.alumnos_imprimir', compact('alumnos'));
    }
}