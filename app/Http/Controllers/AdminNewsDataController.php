<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\NewsData;

class AdminNewsDataController extends Controller
{
    public function index()
    {
        $newsData = NewsData::all();
        $data = [
            'title' => 'News Data',
            'content' => 'admin/news/index',
            'newsData' => $newsData
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add News',
            'content' => 'admin/news/add'
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
            $storage = 'uploads/news/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        NewsData::create($data);
        Alert::success('Success', 'Data berhasil ditambahkan');
        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news = NewsData::findOrFail($id);
        $data = [
            'title' => 'Edit News',
            'content' => 'admin/news/edit',
            'news' => $news
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

        $news = NewsData::findOrFail($id);

        // Update gambar jika ada file baru yang diunggah
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/news/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;

            // Hapus gambar lama jika ada
            if ($news->gambar && file_exists(public_path($news->gambar))) {
                unlink(public_path($news->gambar));
            }
        }

        $news->update($data);
        Alert::success('Success', 'Data berhasil diupdate');
        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $news = NewsData::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($news->gambar && file_exists(public_path($news->gambar))) {
            unlink(public_path($news->gambar));
        }

        $news->delete();
        Alert::success('Success', 'Data berhasil dihapus');
        return redirect()->route('news.index');
    }
}
