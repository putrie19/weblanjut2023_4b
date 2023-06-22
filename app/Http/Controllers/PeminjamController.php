<?php

namespace App\Http\Controllers;

use App\Models\Peminjam;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index(){
         $peminjam = Peminjam::all();
         return view('peminjam.index',compact(['peminjam']));
    }

    function create() 
    {
       return view('peminjam.create'); 
    }
}
 