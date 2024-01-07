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
                            <label for="judul" class="font-weight-bold @error('judul') is-invalid @enderror">Judul Post</label>
                            <input type="text" id="judul" class="form-control" name="judul">

                            @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ ('isi cuy judulnya') }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kategori Post</label>
                            <select name="kategori_id" class="form-control" aria-label="Default select example">
                                <option>Pilih Kategori</option>
                                @foreach ($kategori as $kategori_type )
                                <option value="{{$kategori_type->id}}">{{$kategori_type->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">Objek Post</label>
                            <select name="objek_id" class="form-control" aria-label="Default select example">
                                <option>Pilih Objek</option>
                                @foreach ($select_objek as $objek_type )
                                <option value="{{$objek_type->id}}">{{$objek_type->nama}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">Tambahkan ke Headline</label>
                            <select name="headline" class="form-control">
                                <option value="">-Pilih-</option>
                                <option @if(old('headline')=='Ya') selected @endif value="Ya">Ya</option>
                                <option @if(old('headline')=='Tidak') selected @endif value="Tidak">Tidak</option>
                              </select>
                        </div>



                        <div class="form-group">
                            <label class="font-weight-bold">Detail</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="detail" rows="5" placeholder="Masukkan Detail Post">{{ old('detail') }}</textarea>

                            <!-- error message untuk detail -->
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ ('isi cuy detailnya') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar Sampul</label>
                            <input type="file" class="form-control @error('img_sampul') is-invalid @enderror" name="img_sampul">

                            <!-- error message untuk title -->
                            @error('img_sampul')
                                <div class="alert alert-danger mt-2">
                                    {{ ('isi cuy foto sampulnya') }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-success">SIMPAN</button>
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
    CKEDITOR.replace( 'detail' );
</script>




@endsection
