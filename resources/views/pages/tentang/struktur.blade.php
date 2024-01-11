@extends('layouts.Front.master')

@section('title')
Struktur Organisasi
@endsection

@section('konten')
<div id="struktur_organisasi" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>

        <img src="{{ asset('Assets/Pdf/Struktur organisasi AMIK-YPAT-1.png')}}" alt="" width="100%" height="auto">
    </div>
</div>
@endsection
