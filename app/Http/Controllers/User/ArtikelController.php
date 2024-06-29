<?php

namespace App\Http\Controllers\User;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class ArtikelController extends Controller
{
    public function index() : View
    {
        $artikel_signwave = Artikel::all();
        $artikel_signwave->save();
        return view('user.artikel.index', compact('artikel_signwave'));
    }
}

?>