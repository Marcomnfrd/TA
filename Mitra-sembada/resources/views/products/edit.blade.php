<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">
        </div>
        <div class="form-group">
            <label for="size">Ukuran:</label>
            <input type="text" name="size" id="size" class="form-control" value="{{ $product->size }}">
        </div>
        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
