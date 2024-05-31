<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LayoutController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('layouts/Layout', [
            
        ]);
    }
}
