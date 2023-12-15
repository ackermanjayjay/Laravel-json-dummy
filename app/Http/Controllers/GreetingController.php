<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\View\View;

class GreetingController extends Controller
{
    public function index(): View
    {
        $response = Http::get('https://dummyjson.com/products')['products'];
         return view(
            'Pages.index',
            [
                'title' => 'Home',
                'content' => 'Home',
                
            ],compact('response')
        );
    }
    public function show(): View
    {
        return view('Pages.index', [
            'title' => 'Home',
            'content' => 'Home'
        ]);
    }
}
