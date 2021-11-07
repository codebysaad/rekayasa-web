<?php

namespace App\Models;

class Harapan {
    private static $harapan_artikel = [
        [
            "judul" => "Nilai",
            "slug" => "nilai-akhir-rekayasa-web",
            "nama" => "Saad Fauzi",
            "nim" => "201953134",
            "pesan" => "Harapan saya untuk Nilai Akhir Matakuliah Rekayasa Web adalah A, dengan rincian sebagai berikut:",
            "table" => "on"
        ],
        [
            "judul" => "Alasan",
            "slug" => "alasan-nilai-akhir",
            "nama" => "Saad Fauzi",
            "nim" => "201953134",
            "pesan" => "Kenapa saya pantas mendapat nilai akhir A? Berikut alasannya:",
            "table" => "off"
        ],
    ];
    
    public static function all() {
        return collect(self::$harapan_artikel);
    }

    public static function find($slug) {
        $harapan = static::all();
        return $harapan->firstWhere('slug', $slug);
    }
}
?>