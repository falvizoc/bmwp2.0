<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin.services.index');
    }

    public function create()
    {
        $solutions = Solution::pluck('name','id');

        return view('admin.services.create', compact('solutions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'solution_id' => 'required|integer|exists:solutions,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        Service::create([
            'solution_id' => $request->solution_id,
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->icon,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function edit(Service $service)
    {
        $solutions = Solution::pluck('name','id');

        return view('admin.services.edit', compact('service', 'solutions'));
    }

    public function show(Service $service)
    {
        $solutions = Solution::pluck('name','id');

        return view('admin.services.show', compact('service', 'solutions'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'solution_id' => 'required|integer|exists:solutions,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'icon' => 'required|string|max:255',
        ]);

        $service->update([
            'solution_id' => $request->solution_id,
            'name' => $request->name,
            'description' => $request->description,
            'icon' => $request->icon,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }
}
