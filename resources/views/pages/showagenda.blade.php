@extends('layouts.Front.master')

@section('title')
Post : {{ $agenda->judul }}
@endsection

@section('konten')
<div class="container mt-5 mb-5">


    <div class="row justify-content-center">
        <div class="col-md-8">
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
                      <li class="breadcrumb-item active" aria-current="page">{{ $agenda->judul }}</li>
                    </ol>
                  </nav>
            <div class="card border-0 shadow-sm rounded bg-white">
                <div class="card-body">
                    <img src="{{ asset('storage/agenda/'.$agenda->img_agenda) }}" class="w-100 rounded">
                    <hr>
                    <div class="px-3">
                        <h4>{{ $agenda->judul }}</h4>
                        Pelaksanaan : {{ date('d F Y', strtotime($agenda->date_start)) }} s/d
                        {{ date('d F Y', strtotime($agenda->date_finish)) }} <br>
                        Waktu : {{ $agenda->time_start }}
                        {{ $agenda->time_finish }}
                        Lokasi : {{ $agenda->lokasi }} <br>
                        Link Maps : <a href="{{ $agenda->maps }}" class="text-decoration-none">{{ $agenda->maps }}</a><br>


                        <div class="h6 pb-2 my-4 text-dark border-bottom border-dark">
                            Deskripsi Kegiatan
                          </div>

                            {!! $agenda->detail !!}
                        </p>

                        <span>Diposting {{ $agenda->updated_at->diffForHumans() }}</span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
