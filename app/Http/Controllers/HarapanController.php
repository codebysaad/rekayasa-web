<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Harapan;

class HarapanController extends Controller {
    public function index() {
        return view('harapan', [
            "title" => "Harapan",
            "harapan_artikel" => Harapan::all()
        ]);
    }

    public function show($slug){
        return view('harapan_detail', [
            "title" => "Detail Harapan",
            "artikel" => Harapan::find($slug)
        ]);
    }
}
?>