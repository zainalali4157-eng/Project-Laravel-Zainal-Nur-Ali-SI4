<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});


//contoh route array yang mana belajar itu menggunaka perulangan while  
Route::get('array', function () {
    $nilai_awal = 1; // jadi di sini kita punya nilai awal yaitu 1
    while ($nilai_awal <= 10) { // lalu kita buat perulangan while yang mana nilai awalnya 1 jika kurang dari sama dengan 10 maka akan di jalankan echo dari dalam perulangan while tersebut yaitu masih pemula di kali dengan nilai awal
        echo "saya belajar laravel  $nilai_awal x<br>"; // lalu di sini kita menampilkan echo dari dalam perulangan while
        $nilai_awal++; // lalu nilai awalnya akan di tambah 1 setiap kali perulangan while ini di jalankan
    }
});
