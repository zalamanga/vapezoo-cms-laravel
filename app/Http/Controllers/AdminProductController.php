<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $data = [
            'title' => 'Products',
            'content' => 'admin/products/index',
            'products' => $products
        ];
        return view('admin.layouts.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Add Product',
            'content' => 'admin/products/add'
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

        Product::create($data);
        Alert::success('Success', 'Product created successfully');
        return redirect('admin/products');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $data = [
            'title' => 'Edit Product',
            'content' => 'admin/products/edit',
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

        $product = Product::findOrFail($id);

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
        $product = Product::findOrFail($id);
        if ($product->image && file_exists(public_path($product->image))) {
            unlink(public_path($product->image));
        }
        $product->delete();
        Alert::success('Success', 'Product deleted successfully');
        return redirect('admin/products');
    }
}
