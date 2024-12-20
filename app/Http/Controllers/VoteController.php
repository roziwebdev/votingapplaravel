<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function index()
    {
        $candidates = Candidate::all();
        $hasVoted = Vote::where('user_id', Auth::id())->exists();

        if ($hasVoted) {
            return redirect()->route('candidates.index')->with('error', 'You have already voted.');
        }

        return view('vote.index', compact('candidates'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'candidate_id' => 'required|exists:candidates,id',
        ]);

        $hasVoted = Vote::where('user_id', Auth::id())->exists();

        if ($hasVoted) {
            return redirect()->route('candidates.index')->with('error', 'You have already voted.');
        }

        Vote::create([
            'user_id' => Auth::id(),
            'candidate_id' => $request->candidate_id,
        ]);

        return redirect()->route('candidates.index')->with('success', 'Thank you for voting!');
    }
    public function results()
    {
        $results = Candidate::withCount('votes')->get();
        return view('vote.results', compact('results'));
    }
}
