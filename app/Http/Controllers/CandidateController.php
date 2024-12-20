<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        return view('candidates.index', compact('candidates'));
    }
    public function create()
    {
        return view('candidates.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $photoPath = $request->file('photo')->store('photos', 'public');

        Candidate::create([
            'name' => $request->name,
            'photo' => $photoPath,
        ]);

        return redirect()->route('candidates.index')->with('success', 'Candidate created successfully.');
    }
}
