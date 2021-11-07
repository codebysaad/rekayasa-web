<?php

namespace App\Models;

class Berita {
    private static $berita_artikel = [
        [
            "judul" => "Judul Artikel Pertama",
            "slug" => "judul-artikel-pertama",
            "penulis" => "Saad",
            "isi" => "ini adalah isi artikel pertama"
        ],
        [
            "judul" => "Judul Artikel Kedua",
            "slug" => "judul-artikel-kedua",
            "penulis" => "Fauzi",
            "isi" => "ini adalah isi artikel kedua"
        ],
    ];
    
    public static function all() {
        return collect(self::$berita_artikel);
    }

    public static function find($slug) {
        $berita = static::all();
        return $berita->firstWhere('slug', $slug);
    }
}
?>