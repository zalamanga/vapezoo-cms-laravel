<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producthexohm1;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProducthexohm1Controller extends Controller
{
    public function index()
    {
        $products = Producthexohm1::all();
        $data = [
            'title' => 'Products',
            'content' => 'admin/producthexohm1/index',
            'products' => $products
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'content' => 'admin/producthexohm1/add'
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
            $storage = 'uploads/products/';
            $image->move(public_path($storage), $file_name);
            $data['image'] = $storage . $file_name;
        }

        Producthexohm1::create($data);
        Alert::success('Success', 'Product created successfully');
        return redirect('admin/products');
    }

    public function edit($id)
    {
        $product = Producthexohm1::findOrFail($id);
        $data = [
            'title' => 'Edit Product',
            'content' => 'admin/producthexohm1/edit',
            'product' => $product
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

        $product = Producthexohm1::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . '-' . $image->getClientOriginalName();
            $storage = 'uploads/products/';
            $image->move(public_path($storage), $file_name);
            $data['image'] = $storage . $file_name;
        }

        $product->update($data);
        Alert::success('Success', 'Product updated successfully');
        return redirect('admin/products');
    }

    public function destroy($id)
    {
        $product = Producthexohm1::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('admin/products');
    }
}
