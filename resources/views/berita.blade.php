@extends('layouts.utama')

@section('konten')
    @foreach($berita_artikel as $artikel)
    <article class="mb-5">
        <h2>
            <a href="/berita/{{ $artikel["slug"]}}"> {{ $artikel["judul"] }}</a>
        </h2>
        <h5>Oleh: {{ $artikel["penulis"] }}</h5>
        <p>{{ $artikel["isi"] }}</p>
    </article>
    @endforeach

@endsection