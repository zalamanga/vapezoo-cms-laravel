<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bannerpro;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerproController extends Controller
{
    public function index()
    {
        $banners = Bannerpro::all();
        $data = [
            'title' => 'Slider',
            'content' => 'admin/bannerpro/index',
            'banners' => $banners
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Slider',
            'content' => 'admin/bannerpro/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'urutan' => 'required|integer',
            'gambar' => 'required|image'
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        Bannerpro::create($data);
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('admin/bannerpro');
    }

    public function edit($id)
    {
        $banner = Bannerpro::findOrFail($id);
        $data = [
            'title' => 'Edit Slider',
            'content' => 'admin/bannerpro/edit',
            'banner' => $banner
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'urutan' => 'required|integer',
            'gambar' => 'sometimes|image'
        ]);

        $banner = Bannerpro::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        $banner->update($data);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('admin/bannerpro');
    }

    public function destroy($id)
    {
        $banner = Bannerpro::findOrFail($id);
        if ($banner->gambar && file_exists(public_path($banner->gambar))) {
            unlink(public_path($banner->gambar));
        }
        $banner->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('admin/bannerpro');
    }
}
