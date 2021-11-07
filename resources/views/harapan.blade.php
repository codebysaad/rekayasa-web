@extends('layouts.utama')

@section('konten')
    @foreach($harapan_artikel as $artikel)
    <article class="mb-5">
        <h2>
            <a href="/harapan/{{ $artikel["slug"]}}"> {{ $artikel["judul"] }}</a>
        </h2>
        <h5>Nama: {{ $artikel["nama"] }}</h5>
        <h5>NIM: {{ $artikel["nim"] }}</h5>
        <p>{{ $artikel["pesan"] }}</p>
    </article>
    @endforeach

@endsection