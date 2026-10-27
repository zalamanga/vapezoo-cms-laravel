<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BannerHexohm; // Menggunakan model BannerHexohm yang benar
use App\Models\Producthexohm;
use App\Models\Producthexohm1;

class HexohmController extends Controller
{
    public function index()
    {
        $hexohm = BannerHexohm::all(); // Mengambil semua data dari model BannerHexohm
        $products = Producthexohm::all(); // Mengambil semua data dari model Producthexohm
$products1 = Producthexohm1::all();
        return view('hexohm', compact('hexohm', 'products','products1')); // Mengirimkan data $banners dan $products ke view hexohm
    }
}
