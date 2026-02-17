<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index() {
        $profile = Profile::where('user_id', Auth::id())->first();
        return view('src.template.profile', compact('profile'));
    }

    public function store(Request $request) {
        $request->validate([
            'age'=>'required|integer',
            'bio'=>'required|string',
        ]);

        Profile::create([
            'user_id'=>Auth::id(),
            'age'=>$request->age,
            'bio'=>$request->bio,
        ]);

        return redirect()->route('index')->with('success', 'category berhasil ditambahkan');
    }

    public function update(Request $request, Profile $profile) {
        $request->validate([
            'age'=>'required|integer',
            'bio'=>'required|string',
        ]);

        $profile->update([
            'age'=>$request->age,
            'bio'=>$request->bio,
        ]);

        return redirect()->route('index')->with('success', 'category berhasil diedit');
    }
}
