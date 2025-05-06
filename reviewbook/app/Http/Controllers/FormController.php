<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function welcome(Request $request){
        $request->all();
        return view('welcome',[
            'firstname' => $request->firstName,
            'lastname' => $request->lastName
        ]);
    }

    public function register(){
        return view('form.register');
    }
}
