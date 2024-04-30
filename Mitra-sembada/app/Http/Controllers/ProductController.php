<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan
        $data = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
            // tambahkan validasi sesuai kebutuhan untuk deskripsi, harga, dll.
        ]);

        // dd($data['image']);
        // path
        $path = $data['name'].'.'.$data['image']->getClientOriginalExtension(); // nama file
$data['image']->storeAs('public/images', $path);

        // Simpan data produk ke dalam database
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $path; // Simpan nama file gambar ke dalam kolom 'image'
        $product->size = $request->size;
        // tambahkan kolom lainnya sesuai kebutuhan
        $product->save();

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->size = $request->size;
        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}
