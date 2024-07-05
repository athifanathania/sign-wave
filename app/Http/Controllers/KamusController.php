<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


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


//kamus admin
    public function indexAdmin() : View
    {
        $kamus_signwave = Kamus::all();
        return view('kamus.index', compact('kamus_signwave'));
    }

    public function tambah() : View
    {
        return view('kamus.tambah');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kata' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $filename = null;

        $kamus_signwave = new Kamus();
if ($request->hasFile('gambar')) {
            if ($kamus_signwave->gambar && file_exists(public_path('assets/img/kamus/' . $kamus_signwave->gambar))) {
                @unlink(public_path('assets/img/kamus/' . $kamus_signwave->gambar));
            }

            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName(); // Ensure unique filename
            $file->move(public_path('assets/img/kamus/'), $filename);
        }
        $kamus_signwave->kata = $request->kata;
        $kamus_signwave->deskripsi = $request->deskripsi;
        $kamus_signwave->gambar = $filename;
        $kamus_signwave->save();

        return redirect()->route('kamus.index')->with('success', 'Kamus berhasil ditambahkan!');
    }

    public function edit($id) : View
    {
        $kamus_signwave = Kamus::findOrFail($id);
        return view('kamus.edit', compact('kamus_signwave'));
    }

    public function update(Request $request, $id)
    {
    $validatedData = $request->validate([
        'kata' => 'required',
        'deskripsi' => 'required',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $kamus_signwave = Kamus::findOrFail($id);
    $kamus_signwave->kata = $request->kata;
    $kamus_signwave->deskripsi = $request->deskripsi;

    if ($request->hasFile('gambar')) {
        if ($kamus_signwave->gambar) {
            File::delete(public_path('assets/img/kamus/' . $kamus_signwave->gambar));
        }
    
        $file = $request->file('gambar');
        $filename = $file->getClientOriginalName(); // Ensure unique filename
        $file->move(public_path('assets/img/kamus/'), $filename);
        $kamus_signwave->gambar = $filename;
    }

    $kamus_signwave->save();

    return redirect()->route('kamus.index')->with('success', 'Kamus berhasil diubah!');
    }

    public function destroy($id)
    {
        $kamus_signwave = Kamus::findOrFail($id);

        if ($kamus_signwave->gambar) {
            File::delete(public_path('assets/img/kamus/' . $kamus_signwave->gambar));
        }

        $kamus_signwave->delete();

        return redirect()->back()->with('success', 'Kamus berhasil dihapus!');
    }
}
?>

