<?php

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
use App\Mahasiswa;
use App\Dosen;
use App\Wali;
use App\Hobi;

Route::get('/', function () {
    return view('welcome');
});
 
// Relasi
Route::get('penulis', function(){
    $penulis = \App\User::find(2);

    foreach ($penulis->artikel as $data){
        echo "Judul : $data->judul<br>";
        echo "Deskripsi : $data->deskripsi<br>";
        echo "Slug : $data->slug";
        echo "<hr>";
    }
});
Route::get('relasi-1', function(){
    // Mencari mahasiswa dengan nim 1010102
    $mahasiswa = Mahasiswa::where('nim', '=', '1010102')->first();

    // Menampilkan nama wali dari mahasiswa tersebut
    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function(){
    // Mencari mahasiswa dengan NIM 1010102
    $mahasiswa = Mahasiswa::where('nim', '=', '1010102')->first();

    // Menampilkan nama dosen pembimbing dari Mahasiswa
    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function(){
    // Mencari dosen yang bernama Abdul Musthafa
    $dosen = Dosen::where('nama', '=', 'Abdul Musthafa')->first();

    // Menampilkan seluruh data Mahasiswa dari dosen Abdul Musthafa
    foreach($dosen->mahasiswa as $temp)
        echo '<li>' . $temp->hobi . '</li>';
});
Route::get('relasi-4', function(){
    // Mencari data mahasiswa yang memiliki nama Ari
    $novay = Mahasiswa::where('nama', '=', 'Ari')->first();

    // Menampilkan seluruh data hobi Mahasiswa yang bernama Syahrul
    foreach($novay->hobi as $temp)
        echo '<li>'.$temp->hobi.'</li>';
});

Route::get('relasi-5', function(){
    // Mencari data Hobi Mandi Hujan
    $mandi_hujan = Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    // Menampilkan semua Mahasiswa yang mempunyai Hobi mandi Hujan
    foreach($mandi_hujan->mahasiswa as $temp)
        echo '<li> Nama : ' .$temp->nama .'<strong>'
            .$temp->nim . '</strong></li>';
});
Route::resource('siswa', 'SiswaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('tabungan/report', 'TabunganController@jumlah_tabungan');
Route::resource('tabungan', 'TabunganController');

Route::resource('hobi', 'HobiController');
