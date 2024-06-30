<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;


class KamusController extends Controller
{
    public function home() : View
    {
        $kamus_signwave = Kamus::all();
        return view('kamus-user', compact('kamus_signwave'));
    }
    public function index() : View
    {
        $kamus_signwave = Kamus::all();
        return view('kamus-index', compact('kamus_signwave'));
    }
}

?>