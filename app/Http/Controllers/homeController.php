<?php

namespace App\Http\Controllers;


use Inertia\Inertia;

class homeController extends Controller
{
    public function index()
    {
        return Inertia::render('home');
    }
}
