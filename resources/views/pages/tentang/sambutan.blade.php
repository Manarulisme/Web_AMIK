@extends('layouts.Front.master')

@section('title')
Sambutan Ketua Yayasan
@endsection

@section('konten')

<div id="sambutan_rektor" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">Sambutan Ketua Yayasan</li>
            </ol>
          </nav>



          <h1>{{ $sambutans->judul }}</h1>

          <div class="row row-cols-1 row-cols-md-2 mb-2">
              <div class="col-md-3">
                <img class="img-fluid" src="{{ asset('/storage/images/'.$sambutans->img_sampul) }}" width="100%" height="auto">
                </div>
                <div class="col-md-9">
                    <p class="lh-sm">
                        {!! $sambutans->detail !!}
                    </p>


                </div>
            </div>
    </div>
</div>

@endsection
