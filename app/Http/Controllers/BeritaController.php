<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller {
    public function index() {
        return view('berita', [
            "title" => "Berita",
            "berita_artikel" => Berita::all()
        ]);
    }

    public function show($slug){
        return view('berita_detail', [
            "title" => "Detail Berita",
            "artikel" => Berita::find($slug)
        ]);
    }
}
?>