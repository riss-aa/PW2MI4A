<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Prodicontroller extends Controller
{
    function index(){
    $data = ['prodi' => ['Manajemen Informatika', 'Sistem Informasi', 'Informatika']];

    $prodi = ['Manajemen Informatika', 'Sistem Informasi', 'Informatika'];
    $kampus = "Universitas Multi Data Palembang";


    return view ("prodi.index", compact ('prodi', 'kampus'));
    }

    function detail($id = null){
        echo $id;
    }
}
