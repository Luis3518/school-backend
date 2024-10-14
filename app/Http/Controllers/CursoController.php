<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index(Request $request)
    {
        $cursos = Curso::all();
        
        if ($request->wantsJson()) {
            return response()->json($cursos);
        }
        
        return view('cursos.index', compact('cursos'));
    }


    public function create()
    {
        return view('cursos.create');
    }


    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        
        if ($request->wantsJson()) {
            return response()->json($curso, 201);
        }
        
        return redirect()->route('cursos.index');
    }

 
    public function show(Request $request, Curso $curso)
    {
        if ($request->wantsJson()) {
            return response()->json($curso);
        }
        
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }


    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        
        if ($request->wantsJson()) {
            return response()->json($curso);
        }
        
        return redirect()->route('cursos.index');
    }


    public function destroy(Request $request, Curso $curso)
    {
        $curso->delete();
        
        if ($request->wantsJson()) {
            return response()->json(null, 204);
        }
        
        return redirect()->route('cursos.index');
    }
}