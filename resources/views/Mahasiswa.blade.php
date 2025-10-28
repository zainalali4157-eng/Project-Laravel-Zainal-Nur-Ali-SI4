<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1>Ini Adalah Halaman Mahasiswa</h1>
    </div>

    {{-- Membuat Tabel --}}
    {{--
    Jadi untuk membuat baris di sini di perlukan t head dan t body yang mana t head untuk membuat judul t body untuk
    membuat isi judul nya yang pertama itu kita perlu membuat table yang mana di dalam nya itu ada head sebagai judul
    dan nanti untu isi dari head nya itu di isi ke dalam tr dan isi dari teks nya itu d masukan di th, untuk body juga
    sama yang mana kalau ingin mengisi data di dalam tabel itu di masukkan ke dalam tr dan isi dari teks nya itu di
    masukkan ke dalam td

    jadi harus mengenal namanya itu
    ROWSPAN= Untuk menggabungkan baris
    COLSPAN= Untuk menggabungkan kolom
    --}}


    <table class="table {{--menggunakan class tabbel untuk membentuk tabbel--}}
    table-bordered 
    table-dark {{-- jadi ini itu untuk mewarnai tabble yang mana kalau di bootstrap warna hijau itu namnya success --}}
    table-sm {{-- jadi ini untuk memperkecil ukuran tabel --}}
     table-hover {{-- jadi ini untuk memberikan efek pada satu baris dalam tabel yang mana kalau di dekatkan kursor nya itu akan berubah warna pada baris kolom pada tabel --}}
     text-center {{-- jadi ini untuk membuat teks rata tengah --}}">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Nim</th>
                <th>Angkatan</th>
                <th>Kelas</th>
                <th colspan="2">TTL</th> {{-- nah jadi di sini saya ingin menggabungkan baris alamat dan ttl yang mana
                saya harus menggunakan rowspan untuk menggabungkan nya di situ kita pilih ada berapa kolom yang di pilih
                misalnya 2 berarti 2 kolom yang akan terisi untuk TTL --}}

            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Zainal Nur Ali</td>
                <td>0702232107</td>
                <td>2023</td>
                <td>Sistem Informasi 4</td>
                <td>10 Juni 2004</td>
                <td rowspan="3">Medan</td> {{-- jadi untuk mengabungkan baris itu tergatung di bagian mana akan di
                gabungkan misalnya karena saya ingin mengagabungkan data alamat untuk ketiga alamat yang sudah di buat
                yaitu ali,khaliq dan ibra maka kita harus memilih berapa baris yang akan kita gabungkan tergatung dengan
                isi dari baris tersebut--}}

            </tr>

            <tr>
                <td>Rizky Khaliq</td>
                <td>0702232108</td>
                <td>2023</td>
                <td>Sistem Informasi 4</td>
                <td>11 Juni 2004</td>

            </tr>

            <tr>
                <td>Ibrahim Syahputra Harahap</td>
                <td>0702232109</td>
                <td>2023</td>
                <td>Sistem Informasi 4</td>
                <td>12 Juni 2005</td>

            </tr>
        </tbody>
    </table>


    <nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    </nav>
</body>

</html>