<?php

namespace App\Http\Controllers;

use App\buku;
use Illuminate\Http\Request;

class bukuController extends Controller
{
    public function addbuku()
    {
        $Buku = Buku::all();
        return view('admin.masterData.data_buku', compact('buku'));
    }
}
