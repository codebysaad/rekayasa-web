@extends('layouts.utama')

@section('konten')
    <article>
        <h2>{{ $artikel["judul"] }}</h2>
        <h5>Oleh: {{ $artikel["penulis"] }}</h5>
        <p>{{ $artikel["isi"] }}</p>
    </article>
    <a href="/berita">Kembali ke Berita</a>
@endsection