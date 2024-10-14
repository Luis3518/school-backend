<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{

    public function index(Request $request)
    {
        $cursoId = $request->input('curso');
        $cursos = Curso::all();

        if ($cursoId) {
            $alumnos = Alumno::where('curso_id', $cursoId)->get();
        } else {
            $alumnos = Alumno::all();
        }

        if ($request->wantsJson()) {
            return response()->json([
                'alumnos' => $alumnos            ]);
        }

        return view('alumnos.index', compact('alumnos', 'cursos'));
    }


    public function create()
    {
        $cursos = Curso::all();
        return view('alumnos.create', compact('cursos'));
    }


    public function store(Request $request)
    {
        $alumno = Alumno::create($request->all());

        if ($request->wantsJson()) {
            return response()->json($alumno, 201);
        }

        return redirect()->route('alumnos.index');
    }


    public function show(Request $request, Alumno $alumno)
    {
        $alumno = Alumno::with('curso')->findOrFail($alumno->id);

        if ($request->wantsJson()) {
            return response()->json($alumno);
        }

        return view('alumnos.show', compact('alumno'));
    }

    public function edit(Alumno $alumno)
    {
        $cursos = Curso::all();
        return view('alumnos.edit', compact('alumno', 'cursos'));
    }


    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());

        if ($request->wantsJson()) {
            return response()->json($alumno);
        }

        return redirect()->route('alumnos.index');
    }


    public function destroy(Request $request, Alumno $alumno)
    {
        $alumno->delete();

        if ($request->wantsJson()) {
            return response()->json(null, 204);
        }

        return redirect()->route('alumnos.index');
    }
}