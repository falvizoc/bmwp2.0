<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index');
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Review::create($request->all());

        return redirect()->route('admin.reviews.index')->with('success', 'Reseña creada exitosamente');
    }

    public function show(Review $review)
    {
        return view('admin.reviews.show', compact('review'));
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $review->update($request->all());

        return redirect()->route('admin.reviews.index')->with('success', 'Reseña editada exitosamente!');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()->route('admin.reviews.index')->with('success', 'Reseña eliminada exitosamente!');
    }
}
