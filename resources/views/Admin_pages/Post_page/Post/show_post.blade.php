@extends('layouts.Admin.master')
@section('isi')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <img src="{{ asset('storage/images/'.$post->img_sampul) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $post->judul }}</h4>
                    <p class="tmt-3">
                        {!! $post->detail !!}
                    </p>

                    <p>{{ $post->updated_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
