@extends('layouts.Front.master')

@section('title')
Alumni Post
@endsection

@section('konten')

<div id="sambutan_rektor" class="py-5">
    <div class="container bg-white p-5 rounded">

        <h3>All Alumni Post</h3>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4">
        @foreach ( $alumniposts as $alumniposts )
        <div class="col p-2">
            <div class="card h-100 border border-2 shadow-sm ">

                <img src="{{ asset('/storage/images/'.$alumniposts->img_sampul) }}" class="img-fluid card-img-top" alt="...">

                <div class="card-body">
                    <h6 class="card-title">
                        <a href="/post/{{ $alumniposts->slug }}" class="text-decoration-none text-dark">{{ $alumniposts->judul }}</a>
                        </h6>

                </div>
                <div class="card-footer">

                    <span><i class="fa-solid fa-calendar-days"></i></span>
                    <small>{{ $alumniposts->updated_at->diffForHumans() }}</small>
                    <span class="ms-2"><i class="fa-solid fa-hashtag"></i></i></i></span>
                    <small>{{ $alumniposts->Kategori->name }}</small>
                </div>
            </div>
        </div>

        @endforeach
          </div>

          <div id="pagination" class="mt-3">
              {{ $alumniposts->links() }}
          </div>

    </div>
</div>

@endsection
