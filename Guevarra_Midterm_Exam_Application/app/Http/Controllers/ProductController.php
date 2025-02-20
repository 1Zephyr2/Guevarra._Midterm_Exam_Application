<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['title' => 'Nobody', 'director' => 'Ilya Naishuller'],
            ['title' => 'The Matrix', 'director' => 'Lana & Lilly Wachowski'],
            ['title' => 'John Wick', 'director' => 'Chad Stahelski'],
            ['title' => 'El Camino', 'director' => 'Vince Gilligan'],
        ];

        return view('products', compact('products'));
    }
}