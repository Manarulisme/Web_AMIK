@extends('layouts.Admin.master')

@section('title')
Edit Post
@endsection

@section('isi')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">Judul Post</label>
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $post->judul) }}" placeholder="Masukkan Judul Post">

                            <!-- error message untuk judul -->
                            @error('judul')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Kategori Post</label>
                            <select name="kategori_id" class="form-control" aria-label="Default select example">
                                <option disabled>Pilih Kategori</option>
                                @foreach ($kategori as $kategori_type )
                                <option value="{{$kategori_type->id}}">{{$kategori_type->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Objek Post</label>
                            <select name="objek_id" class="form-control" aria-label="Default select example">
                                <option disabled>Pilih Objek</option>
                                @foreach ($objek as $objek_type )
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
                            <label class="font-weight-bold">Sampul Post</label>
                            <input type="file" class="form-control" name="img_sampul">
                            <img class="my-1" src="{{ asset('/storage/images/'.$post->img_sampul) }}" alt="" width="100px" height="100px">
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">Detail Post</label>
                            <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="5" placeholder="Masukkan Konten Post">{{ old('detail', $post->detail) }}</textarea>

                            <!-- error message untuk detail -->
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-success">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'detail' );
</script>

@endsection

