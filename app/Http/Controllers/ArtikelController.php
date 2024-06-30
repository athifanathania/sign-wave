<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArtikelController extends Controller
{
    public function home(): View
    {
        $artikel_signwave = Artikel::all();
        return view('home-user', compact('artikel_signwave'));
    }
    public function index(): View
    {
        $artikel_signwave = Artikel::all();
        return view('index', compact('artikel_signwave'));
    }
}
