<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    // public function content(){
    //     $buku = BukuController::all();
    //     return view('content',compact(['buku']));
    //     //dd($buku);
    // }

    // public function storeb(Request $buku){
    //     //dd($tb_buku->except(['_token','submit']));
    //     Buku::create($buku->except(['_token','submit']));
    // }

    public function create(){
        return view('buku.buku');
    }
}