@extends('layouts.Front.master')

@section('title')
Biaya Kuliah
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
        <h1>Biaya Kuliah</h1>

        <img src="{{ asset('Assets/Images/Profil/biayakuliah.png') }}" alt="" width="100%" height="auto" class="img-fluid my-3">

        <p>
            <b>Sistem pengelolaan pembiayaan</b> dilakukan secara terpusat pengalokasian dana dibagi menjadi biaya akademik, biaya penelitian dan pengabdian pada masyarakat, biaya pengembangan, biaya penunjang, dan biaya penyusutan. Dana sisa hasil operasional diberlakukan sebagai dana abadi dan dialokasikan untuk pembangunan dan pengembangan.
        </p>
        <p>Berikut kami sampaikan rincian pembiayaan bagi para mahasiswa selama berkuliah di AMIK YPAT Purwakarta :</p>
          <div id="biayakuliah">
            <ol>
                <li>KULIAH TA'ARUF <b>Rp. 800.000</b></li>
                <li>SPK (Sumbangan Pengembangan Kampus)
                    <dd>Gel. I ( 03 Januari – 31 Maret ) = <b>Rp. 1.500.000,-</b></dd>
                    <dd>Gel. II ( 01 April – 30 Juni ) = <b>Rp. 2.000.000,-</b></dd>
                    <dd>Gel. III ( 01 Juli – 31 Agustus ) = <b>Rp. 2.500.000,-</b></dd>
                </li>
                <li>SPP KELAS REGULER <b>Rp. 2.400.000</b> / SEMESTER</li>
                <li>SPP KELAS KARYAWAN <b>Rp. 3.000.000</b> / SEMESTER</li>
                <li>UTS Rp. 100.000 & UAS <b>Rp. 150.000</b> / SEMESTER</li>
                <li>UANG KEMAHASISWAAN <b>Rp. 50.000</b> / SEMESTER</li>
                <li>BIMBINGAN PPL <b>Rp. 400.000</b></li>
                <li>SEMINAR PROPOSAL <b>Rp. 200.000</b></li>
                <li>BIMBINGAN TA <b>Rp. 750.000</b></li>
                <li>SIDANG TA <b>Rp. 1.000.000</b></li>
            </ol>
          </div>
    </div>
</div>

@endsection
