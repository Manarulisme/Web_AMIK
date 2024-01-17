@extends('layouts.Front.master')

@section('title')
jurusan
@endsection

@section('konten')

<div id="visi_misi" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa-solid fa-house"></i> <a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>
        <h1>Jurusan Manajemen Informatika</h1>

        <img src="{{ asset('Assets/Images/Profil/header_Manajemen Informatika.png') }}" alt="" width="100%" height="auto" class="my-3 mb-4">

          <p>
            <b>Jurusan Manajemen Informatika</b> adalah suatu program studi di perguruan tinggi yang fokus pada penerapan prinsip manajemen dalam konteks teknologi informasi. Tujuan utama dari jurusan ini adalah melatih para mahasiswa untuk memahami, mengelola, dan mengoptimalkan penggunaan teknologi informasi di berbagai organisasi.
          </p>

          <p>
            Berikut adalah beberapa aspek utama yang biasanya dicakup dalam jurusan Manajemen Informatika:
          </p>

          <ol>
            <li>
                <b>Manajemen Proyek TI</b>: Memahami prinsip-prinsip manajemen proyek untuk merencanakan, mengelola, dan mengevaluasi proyek teknologi informasi dengan efektif. Ini melibatkan perencanaan sumber daya, penjadwalan, dan pengelolaan risiko.
            </li>

            <li>
                <b>Sistem Informasi Manajemen (SIM)</b>: Menyelidiki cara penggunaan teknologi informasi dapat meningkatkan proses bisnis dan pengambilan keputusan di tingkat manajemen. Ini mencakup analisis kebutuhan informasi, pengembangan sistem, dan integrasi teknologi dalam konteks organisasi.
            </li>

            <li>
                <b>Keamanan Informasi</b>: Mempelajari langkah-langkah untuk melindungi data dan informasi dari ancaman keamanan, termasuk penerapan kebijakan keamanan, manajemen risiko keamanan, dan penanganan insiden keamanan.
            </li>

            <li>
                <b>Manajemen Basis Data</b>: Memahami cara merancang, mengelola, dan mengoptimalkan basis data yang digunakan oleh organisasi. Ini melibatkan desain struktur data, administrasi basis data, dan pemulihan data.
            </li>

            <li>
                <b>E-Bisnis dan E-Commerce</b>: Mempelajari cara menggunakan teknologi informasi untuk mendukung aktivitas bisnis dan perdagangan elektronik. Ini mencakup strategi pemasaran online, analisis kinerja e-bisnis, dan manajemen transaksi online.
            </li>

            <li>
                <b>Manajemen Layanan Teknologi Informasi (IT Service Management)</b>: Memahami prinsip-prinsip manajemen layanan IT untuk memberikan dan menjaga layanan teknologi informasi yang berkualitas. Ini melibatkan proses-proses seperti manajemen perubahan, manajemen insiden, dan manajemen tingkat layanan.
            </li>
          </ol>

          <div class="h4 pb-2 mb-4 text-danger border-bottom border-danger">
          </div>

          <p>
            Lulusan dari jurusan Manajemen Informatika biasanya memiliki keterampilan yang dibutuhkan untuk bekerja dalam berbagai industri dan peran, seperti manajer proyek TI, analis bisnis, administrator basis data, atau spesialis keamanan informasi. Dengan perkembangan teknologi informasi yang terus berlanjut, jurusan ini menjadi semakin relevan dalam mendukung keberhasilan dan efisiensi operasional suatu organisasi.
          </p>
    </div>
</div>

@endsection
