<?php

namespace App\Http\Controllers\app;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MarcasController extends Controller
{
    public function index()
    {
        return view('app/marcas/index');
    }

    public function new()
    {
        return view('app/marcas/new');
    }

    public function create(Request $request)
    {
        dd($request);
    }
}
