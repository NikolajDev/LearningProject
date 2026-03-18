<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            ['user' => 'Alice', 'message' => 'Hello, world!'],
            ['user' => 'Bob', 'message' => 'Laravel is awesome!'],
            ['user' => 'Charlie', 'message' => 'Just chirping around.'],
        ];
        return view('home', ['chirps' => $chirps]);
    }
}
