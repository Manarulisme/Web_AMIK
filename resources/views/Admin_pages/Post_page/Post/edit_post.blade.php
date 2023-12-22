@extends('layouts.Admin.master')



@section('isi')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Edit Post</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>

        </div>

    </div>

</div>



@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif



<form action=#" method="POST" enctype="multipart/form-data">

    @csrf

    @method('PUT')



     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Judul:</strong>

                <input type="text" name="judul" value="{{ $posts->judul }}" class="form-control" placeholder="Name">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Deskripsi :</strong>

                <textarea class="form-control" style="height:150px" name="detail" placeholder="deskripsi">{{ $posts->deskripsi }}</textarea>

            </div>

        </div>


        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Kategori:</strong>

                <select name="kategori_post" class="form-control" aria-label="Default select example">
                    <option>{{$posts->kategori_post}}</option>
                    @foreach ($kategori_post as $kategori_type )
                    <option value="{{$kategori_type->kategori_name}}">{{$kategori_type->kategori_name}}</option>

                    @endforeach

                  </select>


            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Image:</strong>

                <input type="file" name="image" class="form-control" placeholder="image">

                <img src="/gambar/{{ $posts->image }}" width="300px">

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

          <button type="submit" class="btn btn-primary">Submit</button>

        </div>

    </div>



</form>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'deskripsi' );
</script>
@endsection

