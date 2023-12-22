@extends('layouts.Admin.master')



@section('isi')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Post</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered bg-white">

        <tr class="text-center">

            <th>No</th>

            <th>Image</th>

            <th>Judul</th>

            <th>Kategori</th>

            <th>Deskripsi</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($posts as $post)

        <tr>

            <td class="text-center">{{++$i}}</td>

            <td class="text-center"><img src="/gambar/{{ $post->image }}" width="100px"></td>

            <td>{{ $post->judul }}</td>

            <td>{{ $post->kategori_post }}</td>

            <td class="potongText">{!! substr($post->deskripsi , 0, 100) !!} ...</td>

            <td class="text-center">

                <form action="{{ route('posts.destroy',$post->id) }}" method="POST">



                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>



                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>



                    @csrf

                    @method('DELETE')



                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>







@endsection



