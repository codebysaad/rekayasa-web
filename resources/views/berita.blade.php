@extends('layouts.utama')

@section('konten')
    @foreach($berita_artikel as $artikel)
    <article class="mb-5 border-bottom">
        <h2>
            <a href="/berita/{{ $artikel["slug"]}}" class="text-decoration-none"> {{ $artikel["judul"] }}</a>
        </h2>
        <h5>Oleh: {{ $artikel["penulis"] }}</h5>
        <p>{{ $artikel["isi"] }}</p>
        <a href="/berita/{{ $artikel["slug"]}}" class="text-decoration-none">baca selengkapnya...</a>
    </article>
    @endforeach

@endsection