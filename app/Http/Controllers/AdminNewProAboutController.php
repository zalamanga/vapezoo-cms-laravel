<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewProabout;
use RealRashid\SweetAlert\Facades\Alert;

class AdminNewProAboutController extends Controller
{
    public function index()
    {
        $newproabout = NewProabout::all();
        $data = [
            'title' => 'Products',
            'content' => 'admin/newproabout/index',
            'newproabout' => $newproabout
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'content' => 'admin/newproabout/add'
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'order' => 'required|integer',
            'image' => 'required|image'
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . '-' . $image->getClientOriginalName();
            $storage = 'uploads/newproabout/';
            $image->move(public_path($storage), $file_name);
            $data['image'] = $storage . $file_name;
        }

        NewProabout::create($data);
        Alert::success('Success', 'Product created successfully');
        return redirect('admin/newproabout');
    }

    public function edit($id)
    {
        $newproabout = NewProabout::findOrFail($id);
        $data = [
            'title' => 'Edit Product',
            'content' => 'admin/newproabout/edit',
            'newproabout' => $newproabout
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'order' => 'required|integer',
            'image' => 'sometimes|image'
        ]);

        $newproabout = NewProabout::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . '-' . $image->getClientOriginalName();
            $storage = 'uploads/newproabout/';
            $image->move(public_path($storage), $file_name);
            $data['image'] = $storage . $file_name;
        }

        $newproabout->update($data);
        Alert::success('Success', 'Product updated successfully');
        return redirect('admin/newproabout');
    }

    public function destroy($id)
    {
        $newproabout = NewProabout::findOrFail($id);
        if ($newproabout->image && file_exists(public_path($newproabout->image))) {
            unlink(public_path($newproabout->image));
        }
        $newproabout->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('admin/newproabout');
    }
}
