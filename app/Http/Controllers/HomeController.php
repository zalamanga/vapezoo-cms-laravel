<?php

namespace App\Http\Controllers;
use App\Models\Banner;
use App\Models\Product;
use App\Models\NewProduct;
use App\Models\Bannerad;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('urutan')->get(); // Mengambil semua banner
        $products = Product::all(); // Mengambil semua produk
        $newproducts = NewProduct::all();
        $bannerads = Bannerad::all();

        return view('home', compact('banners', 'products', 'newproducts','bannerads')); // Mengirimkan data banner dan produk ke view home.blade.php
    }

}
