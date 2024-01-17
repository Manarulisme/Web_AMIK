@extends('layouts.Front.master')

@section('title')
Kontak Kami
@endsection

@section('konten')

<div id="sambutan_rektor" class="py-5">
    <div class="container bg-white p-5 rounded">

        <h3>Kontak Kami</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>


            <p>Bagi yang anda ada minat atau keperluan terhadap instansi kami. Silahkan untuk menghubungi kontak yang tertera di bawah ini : </p>




    </div>
</div>

@endsection
