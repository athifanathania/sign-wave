<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use App\Models\Jawaban;
use Illuminate\Support\Facades\Storage;

class LatihanController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::with('jawaban')->get();
        return view('latihan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('latihan.tambah');
    }

    public function store(Request $request)
{
    $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'question' => 'required|string',
        'answers' => 'required|array|min:2',
        'answers.*' => 'required|string',
        'correct_option' => 'required|integer|min:1',
    ]);

    $imageName = null;
    if ($request->hasFile('gambar')) {
        $imageName = $request->file('gambar')->store('public/SignWave');
        $imageName = str_replace('public/', '', $imageName); // Adjust path for storage visibility
    }

    $pertanyaan = Pertanyaan::create([
        'gambar' => $imageName,
        'deskripsi_pertanyaan' => $request->question,
    ]);

    foreach ($request->answers as $key => $answer) {
        Jawaban::create([
            'id_pertanyaan' => $pertanyaan->id_pertanyaan,
            'deskripsi_jawaban' => $answer,
            'benar' => $key + 1 == $request->correct_option ? 1 : 0,
        ]);
    }

    return redirect()->route('latihan.index')->with('success', 'Pertanyaan created successfully');
}
public function update(Request $request, $id)
{
    $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'question' => 'required|string',
        'answers' => 'required|array|min:2',
        'answers.*' => 'required|string',
        'correct_option' => 'required|integer|min:1',
        'delete_gambar' => 'nullable|boolean',
    ]);

    $pertanyaan = Pertanyaan::findOrFail($id);

    if ($request->has('delete_gambar') && $request->delete_gambar == 1) {
        if ($pertanyaan->gambar && Storage::exists('public/' . $pertanyaan->gambar)) {
            Storage::delete('public/' . $pertanyaan->gambar);
        }
        $pertanyaan->gambar = null;
    }

    if ($request->hasFile('gambar')) {
        if ($pertanyaan->gambar && Storage::exists('public/' . $pertanyaan->gambar)) {
            Storage::delete('public/' . $pertanyaan->gambar);
        }
        $imageName = $request->file('gambar')->store('public/SignWave');
        $imageName = str_replace('public/', '', $imageName);
        $pertanyaan->gambar = $imageName;
    }

    $pertanyaan->deskripsi_pertanyaan = $request->question;
    $pertanyaan->save();

    $pertanyaan->jawaban()->delete();

    $answers = $request->answers;
    foreach ($answers as $index => $answer) {
        $pertanyaan->jawaban()->create([
            'deskripsi_jawaban' => $answer,
            'benar' => ($index + 1) == $request->correct_option,
        ]);
    }

    return redirect()->route('latihan.index')->with('success', 'Pertanyaan berhasil diperbarui');
}

public function edit($id)
{
    $pertanyaan = Pertanyaan::with('jawaban')->findOrFail($id);
    return view('latihan.edit', compact('pertanyaan'));
}
 
    public function destroy($id)
{
    $pertanyaan = Pertanyaan::findOrFail($id);
    $pertanyaan->delete();

    return redirect()->route('latihan.index')->with('success', 'Pertanyaan deleted successfully');
}

}
