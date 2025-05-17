<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profile = Profile::all();
        $user = User::all();
        return view('profile.index', ['profile' => $profile, 'user' => $user ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profile = Profile::all();
        $user = User::all();
        return view('profile.create', ['data' => $profile, 'user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'age' => 'required|integer',
            'address' => 'required|max:100'
        ]);

        Auth::user()->profile()->create([
            'age' => $request->age,
            'address' => $request->address,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('profile.index')->with('sukses', 'Profile Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Profile::find($id);

        return view('profile.show', ['data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        return view('profile.edit', ['profile' => $user->profile]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        

        $request->validate([
            'name' => 'required|min:3',
            'age' => 'required|integer',
            'address' => 'required|max:100'
        ]);

        $user = Auth::user();
        $user->update([
            'name' => $request->name,
        ]);

        Auth::user()->profile()->update([
            'age' => $request->age,
            'address' => $request->address
        ]);

        return redirect()->route('profile.index')->with('sukses', 'Update Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}
