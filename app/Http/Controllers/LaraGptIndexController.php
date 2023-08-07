<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use Inertia\Response;

//use Illuminate\Http\Request;

class LaraGptIndexController extends Controller
{
    // Handle incoming request

    public function __invoke(string $id = null): Response
    {
        return Inertia::render('Chat/ChatIndex');
    }
}
