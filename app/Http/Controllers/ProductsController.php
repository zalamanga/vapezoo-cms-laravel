<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bannerpro;

class ProductsController extends Controller
{
public function index()
    {
        $bannerpro = Bannerpro::orderBy('urutan')->get(); // Mengambil semua banner

        return view('products', compact('bannerpro')); // Mengirimkan data banner dan produk ke view home.blade.php
    }
}
