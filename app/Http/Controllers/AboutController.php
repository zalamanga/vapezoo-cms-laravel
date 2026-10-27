<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Banneradsabout;
use App\Models\NewProabout;
class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $banneradsabout = Banneradsabout::all();
        $newproabout = NewProabout::all();
        return view('about', compact('abouts','banneradsabout','newproabout'));
    }
}
