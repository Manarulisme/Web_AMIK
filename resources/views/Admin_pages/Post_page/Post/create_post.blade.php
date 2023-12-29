@extends('layouts.Admin.master')



@section('isi')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar Sampul</label>
                            <input type="file" class="form-control @error('img_sampul') is-invalid @enderror" name="img_sampul">

                            <!-- error message untuk title -->
                            @error('img_sampul')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="judul" class="font-weight-bold">Judul</label>
                            <input type="text" id="judul" class="form-control" name="judul">
                        </div>

                        <div class="form-group">
                            <label for="slug" class="font-weight-bold">Slug</label>
                            <input type="text" id="slug" class="form-control" name="slug" disabled readonly>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Detail</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="detail" rows="5" placeholder="Masukkan Konten Post">{{ old('detail') }}</textarea>

                            <!-- error message untuk detail -->
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kategori</label>
                            <select name="category_id" class="form-control" aria-label="Default select example">
                                <option>Pilih Kategori</option>
                                @foreach ($categories as $kategori_type )
                                <option value="{{$kategori_type->name}}">{{$kategori_type->name}}</option>

                                @endforeach

                            </select>
                        </div>
{{--
                        <div class="mb-6 ">
                            <label class="block">
                                <span class="text-gray-700">Select Category</span>
                                <select name="category_id" class="block w-full mt-1 rounded-md">
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name_categories}}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('category_id')
                            <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div> --}}


                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function(){
        fetch('/dashboard/posts/checkSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
</script>

<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'deskripsi' );
</script>




@endsection
