<?php

namespace App\Http\Controllers;
use App\Models\NewProduct;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminNewProductController extends Controller
{
    public function index()
    {
        $products = NewProduct::all();
        $data = [
            'title' => 'Products',
            'content' => 'admin/newproducts/index',
            'products' => $products
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'content' => 'admin/newproducts/add'
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

        NewProduct::create($data);
        Alert::success('Success', 'Product created successfully');
        return redirect('admin/newproducts');
    }

    public function edit($id)
    {
        $product = NewProduct::findOrFail($id);
        $data = [
            'title' => 'Edit Product',
            'content' => 'admin/newproducts/edit',
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

        $product = NewProduct::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . '-' . $image->getClientOriginalName();
            $storage = 'uploads/products/';
            $image->move(public_path($storage), $file_name);
            $data['image'] = $storage . $file_name;
        }

        $product->update($data);
        Alert::success('Success', 'Product updated successfully');
        return redirect('admin/newproducts');
    }

    public function destroy($id)
    {
        $product = NewProduct::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('admin/newproducts');
    }
}
