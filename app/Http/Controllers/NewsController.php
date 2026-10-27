<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsData;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsData::all();

        return view('news', compact('news'));
    }
}
