@extends('layouts.Front.master')

@section('title')
All Agenda
@endsection

@section('konten')

<div id="sambutan_rektor" class="py-5">
    <div class="container bg-white p-5 rounded">

        <h3>All Agenda</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
            @foreach ($allagendas as $allagenda)

            <div class="col p-2">
                <div class="card h-100 border-secondary-emphasis shadow">
                    <img src="{{ asset('/storage/agenda/'.$allagenda->img_agenda) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/agendaterdekat/{{ $allagenda->slug }}" class="text-decoration-none text-dark">{{ $allagenda->judul }}</a></h5>
                            <span class="card-text">
                                <i class="fa-regular fa-calendar-days"></i>
                                    {{ date('d M Y',strtotime($allagenda->date_start)) }} s/d
                                    {{ date('d M Y', strtotime($allagenda->date_finish)) }}</br>
                                    <i class="fa-regular fa-clock"></i>
                                    {{ $allagenda->time_start }} - {{ $allagenda->time_finish }} WIB</br>
                                    <i class="fa-solid fa-link"></i>
                                    <a href="{{ $allagenda->maps }}" class="text-decoration-none">{{ $allagenda->maps }}</a>
                            </span>
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">
                            <i class="fa-solid fa-location-dot"></i>
                         {{ $allagenda->lokasi }}</small>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

          <div id="pagination" class="mt-3">
              {{ $allagendas->links() }}
          </div>

    </div>
</div>

@endsection
