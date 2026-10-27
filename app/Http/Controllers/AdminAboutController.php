<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use RealRashid\SweetAlert\Facades\Alert;

class AdminAboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $data = [
            'title' => 'About Us',
            'content' => 'admin/abouts/index',
            'abouts' => $abouts
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add About Us',
            'content' => 'admin/abouts/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|max:2048',
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/abouts/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        About::create($data);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('abouts.index');
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        $data = [
            'title' => 'Edit About Us',
            'content' => 'admin/abouts/edit',
            'about' => $about
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'sometimes|image|max:2048',
        ]);

        $about = About::findOrFail($id);

        // Update gambar jika ada file baru yang diunggah
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/abouts/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;

            // Hapus gambar lama jika ada
            if ($about->gambar && file_exists(public_path($about->gambar))) {
                unlink(public_path($about->gambar));
            }
        }

        $about->update($data);
        Alert::success('Success', 'Data berhasil diupdate');
        return redirect()->route('abouts.index');
    }

    public function destroy($id)
    {
        $about = About::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($about->gambar && file_exists(public_path($about->gambar))) {
            unlink(public_path($about->gambar));
        }

        $about->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('abouts.index');
    }
}
