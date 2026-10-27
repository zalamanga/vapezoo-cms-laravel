<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banneradsabout;
use RealRashid\SweetAlert\Facades\Alert;

class AdminBanneradsaboutController extends Controller
{
    public function index()
    {
        $banneradsabout = Banneradsabout::all();
        $data = [
            'title' => 'Banner ads',
            'content' => 'admin/banneradsabout/index',
            'banneradsabout' => $banneradsabout
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Banner ads',
            'content' => 'admin/banneradsabout/add'
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
            $storage = 'uploads/banneradsabout/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        } else {
            $data['gambar'] = null;
        }

        Banneradsabout::create($data);
        Alert::success('Success', 'Data Berhasil ditambahkan');
        return redirect('admin/banneradsabout');
    }

    public function edit($id)
    {
        $banneradsabout = Banneradsabout::findOrFail($id);
        $data = [
            'title' => 'Edit bannerads',
            'content' => 'admin/banneradsabout/edit',
            'banneradsabout' => $banneradsabout
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'gambar' => 'sometimes|image'
        ]);

        $banneradsabout = Banneradsabout::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $file_name = time() . '-' . $gambar->getClientOriginalName();
            $storage = 'uploads/banneradsabout/';
            $gambar->move(public_path($storage), $file_name);
            $data['gambar'] = $storage . $file_name;
        }

        $banneradsabout->update($data);
        Alert::success('Success', 'Data Berhasil diupdate');
        return redirect('admin/banneradsabout');
    }

    public function destroy($id)
    {
        $banneradsabout = Banneradsabout::findOrFail($id);
        if ($banneradsabout->gambar && file_exists(public_path($banneradsabout->gambar))) {
            unlink(public_path($banneradsabout->gambar));
        }
        $banneradsabout->delete();
        Alert::success('Success', 'Data Berhasil dihapus');
        return redirect('admin/banneradsabout');
    }
}
?>
