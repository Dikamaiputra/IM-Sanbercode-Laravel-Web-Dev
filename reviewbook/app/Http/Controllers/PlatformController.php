<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    public function index(){
        return view('platform.index');
    }

    public function create(){
        return view('platform.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:platforms'
        ]);

        try{
            Platform::create([
                'name' => $request->name
            ]);
    
            return redirect()->route('platform.index')->with('sukses', 'Sukses Menambah Platform');

        }catch (\Throwable $th){
            return redirect()->back()->with('error', 'Terjadi Kesalahan');
        }
    }
}
