<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class MasterController extends Controller
{
    public function beranda(){
        $buku = buku::all();   
        return view("beranda", ['buku' => $buku]);
    }
}