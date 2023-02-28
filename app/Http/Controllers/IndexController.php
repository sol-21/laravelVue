<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        return inertia('Index/Index',
            [
                'message' => "Hello from laravel",
            ]);
    }
    public function show()
    {
        return inertia('Index/Show', [
            'message' => "Single Page Application(SPA)",
        ]);
    }
}
