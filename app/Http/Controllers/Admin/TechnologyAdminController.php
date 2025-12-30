<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $technologies = Technology::orderBy('category')->orderBy('order')->get();
        $grouped = $technologies->groupBy('category');
        
        return view('admin.technologies.index', compact('technologies', 'grouped'));
    }

    public function create()
    {
        return view('admin.technologies.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        Technology::create([
            'category' => $request->category,
            'name' => $request->name,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.technologies.index')->with('success', 'Technology added successfully!');
    }

    public function edit(Technology $technology)
    {
        return view('admin.technologies.edit', compact('technology'));
    }

    public function update(Request $request, Technology $technology)
    {
        $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'order' => 'nullable|integer',
        ]);

        $technology->update([
            'category' => $request->category,
            'name' => $request->name,
            'order' => $request->order ?? 0,
        ]);

        return redirect()->route('admin.technologies.index')->with('success', 'Technology updated successfully!');
    }

    public function destroy(Technology $technology)
    {
        $technology->delete();
        return redirect()->route('admin.technologies.index')->with('success', 'Technology deleted successfully!');
    }
}
