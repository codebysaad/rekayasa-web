@extends('layouts.utama')

@section('konten')
<div class="row">
    <div class="col-sm-4">
        @include('partials.cards')
    </div>
    <div class="col-sm-6" style="width: 50%;">
        @include('partials.maps')
    </div>
</div>
@endsection