<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Http\Request;
use Auth;

class BookController extends Controller
{
    public function book() {
        $buku_list = Book::all();
        return view('buku.index',compact('buku_list'));
    }

    public function bookAuth() {
        $data = "Welcome " . Auth::user()->name;
        return response()->json($data, 200);
    }
    public function create(Request $request){
        $data = new BOOK;
        $data->tittle =$request->input('judul');
        $data->genre =$request->input('genre');
        $data->stock =$request->input('stok');
        $data->save();
        $buku_list = Book::all();
        return redirect('buku');
    }
    public function edit($id){
        $buku = BOOK::where('id',$id)->first();
        return view('buku.edit',compact('buku'));
    }
    public function editp(Request $request,$id){
        $buku = BOOK::where('id',$id)->first();
        $buku->tittle =$request->input('judul');
        $buku->genre =$request->input('genre');
        $buku->stock =$request->input('stok');
        $buku->save();
        return redirect('buku');
    }
}