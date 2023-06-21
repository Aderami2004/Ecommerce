<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\tambah;


class TambahController extends Controller
{
    //
    function show(){
        $data ['tambah'] = tambah::all();
        return view('tambah',$data);
    }

    function add(){
        $data=[
            'action'=>url('tambah/create'),
            'tombol'=>'simpan',
            'tambah'=>(object)[
                'nama' =>'',
                'tipe' =>'',
                'harga' =>'',
                'alamat' =>'',
                'foto' => '',
            ],
        ];
        return view('tambah',$data);
    }



}

