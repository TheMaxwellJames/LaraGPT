<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Auth;
use Inertia\Response as InertiaResponse;
//use Illuminate\Http\Request;

class LaraGptIndexController extends Controller
{
    // Handle incoming request

    public function __invoke(string $id = null): Response
    {
        return Inertia::render('Chat/ChatIndex', [
            'chat' => fn () => $id ? Chat::findOrFail($id) : null,
            'messages' => Chat::latest()->where('user_id', Auth::id())->get()
        ]);
    }
}
