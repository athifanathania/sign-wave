<?php

namespace App\Http\Controllers\User;

use App\Models\Kamus;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index() : View
    {
        $kamus_signwave = Kamus::all();
        $artikel_signwave = Artikel::all();

        return view('user.index', compact('kamus_signwave', 'artikel_signwave'));
    }
}

?>