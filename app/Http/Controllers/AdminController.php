<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImageRequest;
use App\Http\Requests\StorePictureRequest;
use App\Models\Picture;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function show_picture()
    {
        $pictures = Picture::with('product')->get();
        return view('admin.index', compact('pictures'));
    }

    public function add_picture()
    {
        $products = Product::all();
        return view('admin.create', compact('products'));
    }

    public function picture_store(StoreImageRequest $request)
    {
        $validated = $request->validated();

        $product = Product::find($validated['product_id']);

        // Pastikan produk ditemukan
        if (!$product) {
            return redirect()->back()->withErrors(['Product not found']);
        }

        DB::transaction(function () use ($request, $product, $validated) {
            if ($request->hasFile('url')) {
                $urlPath = $request->file('url')->store('products', 'public');
                $validated['url'] = $urlPath;
            } else {
                $urlPath = 'images/icon-default.png';
            }

            $validated['product_id'] = $product->id;

            $picture = Picture::create($validated);
        });

        return redirect()->route('show-picture');
    }

    public function destroy_picture(Picture $picture)
    {
        DB::beginTransaction();

        try {
            $picture->delete();
            DB::commit();

            return redirect()->route('show-picture');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('show-picture')->with('error', 'terjadi error');
        }
    }

    public function show_product()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function add_product()
    {
        return view('admin.products.create');
    }


    public function product_store(StorePictureRequest $request)
    {
        DB::transaction(function () use ($request) {
            $validated = $request->validated();

            if ($request->hasFile('url')) {
                $urlPath = $request->file('url')->store('products', 'public');
                $validated['url'] = $urlPath;
            } else {
                $urlPath = 'images/icon-default.png';
            }

            $product = Product::create($validated);
        });

        return redirect()->route('show-product');
    }

    public function destroy(Product $product)
    {
        DB::beginTransaction();

        try {
            $product->delete();
            DB::commit();

            return redirect()->route('show-product');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('show-product')->with('error', 'terjadi error');
        }
    }
}
