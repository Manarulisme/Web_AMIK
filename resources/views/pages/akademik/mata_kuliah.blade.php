@extends('layouts.Front.master')

@section('title')
Mata Kuliah
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
        <h1>Mata Kuliah</h1>

        <img src="{{ asset('Assets/Images/Profil/header_mata kuliah.png') }}" alt="" width="100%" height="auto" class="img-fluid my-3">

        <p>
            <b>Mata kuliah </b>adalah unit pembelajaran atau pelajaran yang merupakan bagian dari suatu program studi atau kurikulum di institusi pendidikan tinggi, seperti perguruan tinggi atau universitas. Setiap mata kuliah dirancang untuk memberikan pemahaman dan keterampilan khusus dalam suatu bidang studi. Dalam suatu program studi, terdapat serangkaian mata kuliah yang harus diselesaikan oleh mahasiswa untuk memperoleh gelar atau kualifikasi yang telah disediakan oleh kampus.
        </p>
          <div id="matkul">
            <img src="{{ asset('Assets/Images/matkul/matkul.png') }}" alt="" width="100%" height="auto" class="img-fluid">

          </div>

          <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Informasi Penting !</h4>
            <span>Pemilihan jam matakuliah disesuaikan dengan kategori kelas yang dipilih oleh mahasiswa.</span>
            <hr>
            <span class="mb-0">Mahasiswa telah terkategorisasi sebagai <b>Mahasiswa Reguler dan Non-Reguler / Karyawan</b>. Silahkan bagi yang akan masuk ke kampus kami untuk bijak dalam menentukan kelas mana yang akan dipilih sesuai rutinitas sehari-hari untuk membuat kenyamanan saat proses perkuliahan sedang berlangsung.</span>
          </div>
    </div>
</div>

@endsection
