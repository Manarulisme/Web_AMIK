@extends('layouts.Front.master')

@section('title')
Beranda
@endsection

@section('konten')
<div>
    <div id="slide_show">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                  <img src="{{ asset('/storage/slideshow/'.$slidefirsts->img_slideshow) }}" class="d-block w-100" alt="...">
                </div>

                @foreach ( $slideshows as $slideshow )
                <div class="carousel-item" data-bs-interval="2000">
                  <img src="{{ asset('/storage/slideshow/'.$slideshow->img_slideshow) }}" class="d-block w-100" alt="...">
                </div>
                @endforeach

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div id="headline" style="background-color: #f3f3f3;">
        <div class="container py-2 py-sm-3 py-md-4 py-xl-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-center">
                <div class="col-12 col-sm-12 col-md-4 col-xl-3 ">
                    <div class="text-center">
                        <img class="img-fluid" src="{{ asset('/storage/images/'.$headline->img_sampul) }}" alt="" width="auto" height="150px">
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-8 col-xl-9" style="text-align: justify;">
                    <h3 class="text-start">{{ $headline->judul }}</h3>
                    <p class="lh-sm">{!! substr($headline->detail,0,504) !!}</p>
                    <a href="{{ url('/sambutan-direktur') }}" class="text-danger text-decoration-none">Selengkapnya <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
        </div>


    <div id="info_kampus">
        <div class="container py-3 px-5 py-sm-3 py-md-4 py-xl-5">
            <div class="text-center">
                <h2>Informasi Kampus Kita</h2>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">

                @foreach ( $informs as $inform )

                <div class="col p-2">
                    <div class="card h-100 border border-2 shadow-sm ">

                        <img src="{{ asset('/storage/images/'.$inform->img_sampul) }}" class="img-fluid card-img-top" alt="...">

                        <div class="card-body">
                            <h6 class="card-title">
                                <a href="/post/{{ $inform->slug }}" class="text-decoration-none text-dark">{{ $inform->judul }}</a>
                                </h6>

                        </div>
                        <div class="card-footer">

                            <span><i class="fa-solid fa-calendar-days"></i></span>
                            <small>{{ $inform->updated_at->diffForHumans() }}</small>
                            <span class="ms-2"><i class="fa-solid fa-hashtag"></i></i></i></span>
                            <small>{{ $inform->Kategori->name }}</small>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="text-end">
                <a class="btn btn-danger" href="{{ url('/allposts') }}">Selengkapnya
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>
        </div>

    </div>

    <div id="agenda" style="background-color: #f8f4f4">
        <div class="container py-2 py-sm-3 py-md-4 py-xl-5">
            <div class=" h4 pb-2 mb-4 text-dark border-bottom border-danger">Agenda Terdekat</div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
                @foreach ($agendas as $agenda)

                <div class="col p-2">
                    <div class="card h-100 border-secondary-emphasis shadow">
                        <img src="{{ asset('/storage/agenda/'.$agenda->img_agenda) }}" class="card-img-top img-fluid" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="/agendaterdekat/{{ $agenda->slug }}" class="text-decoration-none text-dark">{{ $agenda->judul }}</a></h5>
                                <span class="card-text">
                                    <i class="fa-regular fa-calendar-days"></i>
                                        {{ date('d M Y',strtotime($agenda->date_start)) }} s/d
                                        {{ date('d M Y', strtotime($agenda->date_finish)) }}</br>
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $agenda->time_start }} - {{ $agenda->time_finish }} WIB</br>
                                        <i class="fa-solid fa-link"></i>
                                        <a href="{{ $agenda->maps }}" class="text-decoration-none">{{ $agenda->maps }}</a>
                                </span>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">
                                <i class="fa-solid fa-location-dot"></i>
                             {{ $agenda->lokasi }}</small>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

            <div class="text-end">
                <a class="btn btn-danger" href="{{ url('/allagendas') }}">Selengkapnya
                    <i class="fa-solid fa-angle-right"></i>
                </a>
            </div>

        </div>
    </div>

    <div id="video_kampus">
        <div class="bg-danger text-white">
            <div class="container py-2 py-sm-3 py-md-4 py-xl-5">
                <h1>Kanal video Kampus</h1>
                Selalu ada hal menarik yang berasal dari dalam kampus, dosen, mahasiswa, staff ataupun alumni yang kami tampilkan pada video dibawah ini :
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-2  align-items-center">
                    <div class="col py-md-3 px-md-3">
                            <iframe width="100%" height="300rem" src="https://www.youtube.com/embed/hgY45p4bUro?si=3eq2iFR8QLNY6wEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col py-md-3 px-md-3">
                        <div class="text-center">
                            <iframe width="100%" height="300rem" src="https://www.youtube.com/embed/-EkYlsemneM?si=VXAiaTaMLaqB4R52" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
