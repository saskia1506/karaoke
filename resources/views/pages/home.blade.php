@extends('layout.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/kasa.jpg',
        'title' => 'Lagu baru Tsukasa Sudah Liris Di Mikeu Pang Pang?!!!',
        'desc' => 'Penasaran cara dapetinnya?jangan lupa ikuti kami terus',
        'btntext' => 'Baca Selengkapnya',
        'btnlink' => '#'
    ])
@endsection