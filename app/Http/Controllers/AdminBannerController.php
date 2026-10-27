<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $data = [
            'title' => 'Slider',
            'content' => 'admin/banners/index',
            'banners' => $banners
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Slider',
            'content' => 'admin/banners/add'
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

        Banner::create($data);
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('admin/banners');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        $data = [
            'title' => 'Edit Slider',
            'content' => 'admin/banners/edit',
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

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banners/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        $banner->update($data);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('admin/banners');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        if ($banner->gambar && file_exists(public_path($banner->gambar))) {
            unlink(public_path($banner->gambar));
        }
        $banner->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('admin/banners');
    }
}
