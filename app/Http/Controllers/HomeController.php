<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::get();
        $pictures = Picture::with('product')->orderByDesc('id')->get();
        $projects = Project::get();

        return view("index", compact('pictures', 'products', 'projects'));
    }
}
