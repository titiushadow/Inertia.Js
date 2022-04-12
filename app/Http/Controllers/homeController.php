<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class homeController extends Controller
{
    public function index()
    {
        $user = 'Meseikers';

        return Inertia::render('home', [
            'user' => $user
        ]);
    }

    public function about()
    {
        return Inertia::render('about');
    }
}
