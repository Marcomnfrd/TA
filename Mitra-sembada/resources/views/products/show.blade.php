<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detail Produk</h1>
    <div>
        <strong>Nama:</strong> {{ $product->name }}<br>
        <strong>Deskripsi:</strong> {{ $product->description }}<br>
        <strong>Harga:</strong> {{ $product->price }}<br>
        <strong>Ukuran:</strong> {{ $product->size }}<br>
        <strong>Gambar:</strong> <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="200"><br>
    </div>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Kembali</a>
@endsection
