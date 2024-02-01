<?php

namespace App\Http\Controllers;

use App\Models\Yemek;

class YemekController extends Controller
{
    public function index()
    {
        $yemekler = Yemek::all();
        return view('yemekler', ['yemekler' => $yemekler]);
    }

    public function kategoriyeGoreListele($kategori)
    {
        $yemekler = Yemek::where('kategori', $kategori)->get();
        return view('yemekler', ['yemekler' => $yemekler]);
    }
}
