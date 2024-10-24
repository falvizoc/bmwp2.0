<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    public function index()
    {
        return view('admin.solutions.index');
    }

    public function create()
    {
        return view('admin.solutions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        Solution::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.solutions.index')->with('success', 'Solucion agregada exitosamente!');
    }

    public function edit(Solution $solution)
    {
        return view('admin.solutions.edit', compact('solution'));
    }

    public function update(Request $request, Solution $solution)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $solution->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.solutions.index')->with('success', 'Solucion editada exitosamente!');
    }

    public function destroy(Solution $solution)
    {
        $solution->delete();
        return redirect()->route('admin.solutions.index')->with('success', 'Solucion eliminada exitosamente!');
    }
}
