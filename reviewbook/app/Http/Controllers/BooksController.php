<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\IsAdmin;
use App\Models\Books;
use App\Models\Genre;
use Illuminate\Support\Facades\File; 
use Illuminate\Http\Request;
// use Illuminate\Routing\Controllers\HasMiddleware;
// use Illuminate\Routing\Controllers\Middleware;
// implements HasMiddleware
class BooksController extends Controller 
{
    // public static function middleware(): array
    // {
    //     return [
    //         // new Middleware('log', only: ['index']),
    //         new Middleware(IsAdmin::class, except: ['index', 'show']),
    //     ];
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        return view('books.create', ['genres' => $genres]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:books',
            'summary' => 'required',
            'stock' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:2048',
            'genre_id' => 'required'
        ]);

        $newImageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('uploads'), $newImageName);

        Books::create([
            'title' => $request->title,
            'summary' => $request->summary,
            'stock' => $request->stock,
            'image' => $newImageName,
            'genre_id' => $request->genre_id
        ]);

        return redirect()->route('books.index')->with('sukses', 'Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Books::with('genre')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $genre = Genre::all();
        $data = Books::find($id);

        return view('books.edit', ['data' => $data, 'genre' => $genre]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Books::find($id);

        $request->validate([
            'title' => 'required',
            'summary' => 'required',
            'stock' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:2048',
            'genre_id' => 'required'
        ]);

        if($request->has('image')){
            //hapus gambar lama
            File::delete('uploads/'.$data->image);

            $imagefileName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads'), $imagefileName);

            $data->image = $imagefileName;

        }

        $data->update([
            'title' => $request->title,
            'summary' => $request->summary,
            'stock' => $request->stock,
            'genre_id' => $request->genre_id,
        ]);

        return redirect()->route('books.index')->with('sukses', 'Update Books Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
        $data = Books::find($id);
        $data->delete();

         return redirect()->route('books.index')->with('sukses', 'Berhasil Menghapus Data!');;
    }
}
