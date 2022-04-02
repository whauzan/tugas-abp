<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public $obat = array();
    public function index() {
        return view('obat');
    }

    public function tambahObat(Request $request) {
        $data = $request->input();

        $size = count($this->obat);
        $this->obat[$size]->nama = $data['nama'];
        $this->obat[$size]->kode = $data['kode'];
        $this->obat[$size]->deskripsi = $data['deskripsi'];
        $this->obat[$size]->tipe = $data['tipe'];
        $this->obat[$size]->jumlah = $data['jumlah'];
        $this->obat[$size]->harga = $data['harga'];
    }
}
