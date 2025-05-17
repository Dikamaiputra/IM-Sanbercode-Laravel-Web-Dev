<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("dashboard.index");
    }

    public function dashboard(){
        $data = Books::all();
        return view("dashboard.home", ['data' => $data]);
    }
}
