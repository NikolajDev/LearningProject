<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = Chirp::with('user')->latest()->take(50)->get();

        return view('home', compact('chirps'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ], [
            'message.required' => 'The message field is required.',
            'message.max' => 'The message may not be greater than 255 characters.',
        ]);

        $request->user()->chirps()->create($validated);

        return redirect('/')->with('success', 'Chirp created successfully!');
    }

    public function edit(Chirp $chirp)
    {
        return view('chirps.edit', compact('chirp'));
    }

    public function update(Request $request, Chirp $chirp)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $chirp->update($validated);

        return redirect('/')->with('success', 'Chirp updated!');
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->delete();

        return redirect('/')->with('success', 'Chirp deleted successfully!');
    }
}