<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::all();
        return view('genre.index', [
            'genre' => $genre
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres',
            'description' => 'required'
        ]);

        Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('genre.index')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        $data = Genre::find($id);
        return view('genre.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Genre::find($id);
        return view('genre.edit', ['data' => $data]);  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $data = Genre::find($id);
        $data->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('genre.index')->with('sukses', 'Berhasil Mengubah Data!');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Genre::find($id);
        $data->delete();

        return redirect()->route('genre.index')->with('sukses', 'Berhasil Menghapus Data!');;
    }
}
