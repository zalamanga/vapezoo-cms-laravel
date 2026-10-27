<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bannerad;
use RealRashid\SweetAlert\Facades\Alert;


class AdminBanneradsController extends Controller
{
    public function index()
    {
        $bannerads = Bannerad::all();
        $data = [
            'title' => 'Banner ads',
            'content' => 'admin/bannerads/index',
            'bannerads' => $bannerads
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Banner ads',
            'content' => 'admin/bannerads/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'gambar' => 'required|image'
        ]);

        // Upload gambar
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/bannerads/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        Bannerad::create($data);
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('admin/bannerads');
    }

    public function edit($id)
    {
        $bannerad = Bannerad::findOrFail($id);
        $data = [
            'title' => 'Edit bannerads',
            'content' => 'admin/bannerads/edit',
            'bannerad' => $bannerad
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'gambar' => 'sometimes|image'
        ]);

        $bannerad = Bannerad::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/bannerads/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        $bannerad->update($data);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('admin/bannerads');
    }

    public function destroy($id)
    {
        $bannerad = Bannerad::findOrFail($id);
        if ($bannerad->gambar && file_exists(public_path($bannerad->gambar))) {
            unlink(public_path($bannerad->gambar));
        }
        $bannerad->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('admin/bannerads');
    }
}
