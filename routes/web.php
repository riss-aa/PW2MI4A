<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Beranda');
});

Route::get('/login',function (){
    return view ("login");
}); 

Route::get("/hallo", function(){
    echo "<h2>HallloWord</h1>";
    echo "<p>Selamat Datang <b>Ahmad</b>";
});

Route::get("/mahasiswa/{nama?}/{npm?}", function($nama = null, $npm = null){
    echo "<p>Hallo <b>$nama $npm</b><?p>";
    echo "<a href= '". route ('call')."'>hubungi Kami</a><br>";
    echo "<a href ='".Route('dsn', ['Ahmad', '161125'])."'>Ahmad</a><br/>";
    echo "<a href = '".Route('mk', ['PWII', 'J2204', 'Manajemen Informatika']). "'>Matakuliah</a><br>";
});
Route::get("/dosen/{nama?}/{kode?}", function($nama = null, $kode = null){
    echo "<p>Hallo <b>$nama $kode</b><?p>";
}) -> name("dsn");

route::get("/mk/{nama?}/{kode?}/{prodi?}",function($nama = null, $kode = null, $prodi = null){
    echo "Nama Matakuliah : <b>$nama</b><br>";
    echo "Kode Matakuliah : <b>$kode</b><br>";
    echo "Prodi : <b>$prodi</b><br>";
}) ->name("mk");
Route::get ("/Hubungi 2", function (){
    echo "<h1>Hubungi Kami</h1>";
}) -> name("call");

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/Dosen',function (){
    $kampus = "Universitas Multi Data Palembang";
    return view ("Dosen.index", compact('kampus'));
}); 

Route::get('/fakultas',function (){
    return view ("Fakultas.index",['ilkom' => 'Fakultas Ilmu Komputer Dan Rekayasa', 
    'feb' => 'Fakultas Ekonomi Dan Bisnis']);
}); 

/*Route::get('/prodi',function (){
    $data = ['prodi' => ['Manajemen Informatika', 'Sistem Informasi', 'Informatika']];

    $prodi = ['Manajemen Informatika', 'Sistem Informasi', 'Informatika'];
    $kampus = "Universitas Multi Data Palembang";


    return view ("prodi.index", compact ('prodi', 'kampus')); 

}) ->name("prodi");*/

use App\Http\Controllers\prodicontroller;
Route::get("/prodi", [prodicontroller::class, "index"]);

//Buat Halaman detail Prodi
//Arahkan Ke contoller prodi, pada method drtail
//kirim paramater id prodi ke drtail
Route::get("/prodi/detail/{id}", [prodicontroller::class, "detail"]);
