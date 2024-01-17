@extends('layouts.Front.master')

@section('title')
Post : {{ $post->judul }}
@endsection

@section('konten')

<div id="show_post" class="py-5">
    <div class="container bg-white p-5 rounded">

    <div id="share">
        <h3>Share:
            <a href="" class="text-dark"><i class="fa-brands fa-square-whatsapp"></i></a>
            <a href="" class="text-dark"><i class="fa-brands fa-square-x-twitter"></i></a>
            <a href="" class="text-dark"><i class="fa-brands fa-square-instagram"></i></a>
            <a href="" class="text-dark"><i class="fa-brands fa-linkedin"></i></a>
        </h3>

    </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $post->Kategori->name }}</li>
            </ol>
          </nav>



          <h4>Post : {{ $post->judul }}</h4>
          <div class="img-fluid my-3">
            <img src="{{ asset('storage/images/'.$post->img_sampul) }}" alt="" width="100%" height="auto">
          </div>

          <div class="mx-5">
            <p> {!! $post->detail !!}</p>

            <div class="pb-2 my-4 text-danger border-bottom border-danger">Diposting : {{ $post->updated_at->diffForHumans() }}</div>
          </div>

    </div>
</div>

@endsection
