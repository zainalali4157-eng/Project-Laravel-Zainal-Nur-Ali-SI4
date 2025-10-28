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
    for ($nilai = 1; $nilai <= 10; $nilai++) { //ini adalah contoh perulangan for yang mana nilai awal nya itu adalah satu kalau nilai nya kurang dari sepuluh maka nilai itu akan di tambah satu sampai berhenti di sepuluh yang mana nanti akan menampilkan angka dari satu sampai 10 kalau menguunaan kurang dari sama dengan tapi kalau menggunakan kurang dari maka nanti angka 10 tidak akan muncul cukup sampai 9
        echo 'Perulangan Menggunakan For : ' . $nilai . 'x<br>'; // dan ini adalah contoh menampilkan angka dari satu sampai sepuluh yang mana di sini tanda titik dua di bawah itu adalah untuk menggabungkan string dengan variabel
    }
});
