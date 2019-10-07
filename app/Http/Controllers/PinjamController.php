<?php

namespace App\Http\Controllers;
use App\Peminjaman;
use App\Anggota;
use App\Book;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function index() {
        $pinjam_list = Peminjaman::all();
        $buku = Book::all();
        $anggota = Anggota::all();
        return view('pinjam.index',compact('pinjam_list','anggota','buku'));
    }
    public function pinjam() {
        $buku = Book::all();
        $anggota = Anggota::all();
        return view('pinjam.create',compact('buku','anggota'));
    }
    public function ppinjam(Request $request) {
        $pinjam = new Peminjaman;
        $pinjam->idpeminjam =$request->input('idpeminjam');
        $pinjam->idbuku =$request->input('idbuku');
        $pinjam->jumlahbuku =$request->input('jumlahbuku');
        $pinjam->tanggalpinjam = date("m/d/y");
        $pinjam->tanggalkembali =$request->input('tanggalkembali');
        $pinjam->save();
        return redirect('pinjam');
    }

}
