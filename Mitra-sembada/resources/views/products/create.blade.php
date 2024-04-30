<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Tambah Produk</h1>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nama:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Deskripsi:</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Harga:</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="size">Ukuran:</label>
            <input type="text" name="size" id="size" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Gambar:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
