@extends('layouts.Front.master')

@section('title')
Staff Pengajar
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
        <h1>Staff Pengajar</h1>

        <p>
           Berikut kami sampaikan para staff pengajar di Kampus AMIK YPAT Purwakarta:
        </p>
          <div id="matkul">
            <img src="{{ asset('Assets/Images/namaDosen/namadosen1.jpg') }}" alt="" width="100%" height="auto" class="img-fluid">
            <img src="{{ asset('Assets/Images/namaDosen/namadosen2.jpg') }}" alt="" width="100%" height="auto" class="img-fluid">

          </div>

    </div>
</div>

@endsection
