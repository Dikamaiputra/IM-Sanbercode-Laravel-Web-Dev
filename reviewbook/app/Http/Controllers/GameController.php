<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FacadesDB::table('games')->get();
        return view('game.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:games',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required',
        ]);

        FacadesDB::table('games')->insert([
            'name' => $request->name,
            'gameplay' => $request->gameplay,
            'developer' => $request->developer,
            'year' => $request->year
        ]);

        return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $data = FacadesDB::table('games')->find($id);
        return view('game.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = FacadesDB::table('games')->find($id);
        return view('game.edit', ['data' => $data]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $request->validate([
            'name' => 'required',
            'gameplay' => 'required',
            'developer' => 'required',
            'year' => 'required',
        ]);

        FacadesDB::table('games')
        ->where('id', $id)
        ->update([
            'name' => $request->name,
            'gameplay' => $request->gameplay,
            'developer' => $request->developer,
            'year' => $request->year
        ]);

        return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FacadesDB::table('games')->where('id', $id)->delete();

        return redirect()->route('game.index');
    }
}
