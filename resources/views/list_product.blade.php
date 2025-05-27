@extends('layout.list')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>
    <ul class="space-y-2">
        <li>ID: {{ $id }}</li>
        <li>Produk: {{ $produk }}</li>
    </ul>
@endsection 