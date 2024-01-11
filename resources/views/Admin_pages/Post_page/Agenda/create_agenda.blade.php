@extends('layouts.Admin.master')



@section('isi')

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('agendaterdekat.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                          <div class="form-group">
                            <label for="judul" class="font-weight-bold @error('judul') is-invalid @enderror">Judul Agenda</label>
                            <input type="text" id="judul" class="form-control" name="judul">

                            @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ ('isi cuy judulnya') }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="date_start">Jadwal Mulai</label></br>
                            <input type="date" id="date_start" name="date_start">
                            <input type="time" id="time_start" name="time_start">
                        </div>

                        <div class="form-group">
                            <label for="date_finish">Jadwal Berakhir</label></br>
                            <input type="date" id="date_finish" name="date_finish">
                            <input type="time" id="time_finish" name="time_finish">

                        </div>

                        <div class="form-group">
                            <label for="lokasi" class="font-weight-bold @error('lokasi') is-invalid @enderror">Lokasi Agenda</label>
                            <input type="text" id="lokasi" class="form-control" name="lokasi">

                            @error('lokasi')
                            <div class="alert alert-danger mt-2">
                                {{ ('isi cuy lokasinya') }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="maps" class="font-weight-bold @error('maps') is-invalid @enderror">Link Maps Agenda</label>
                            <input type="text" id="maps" class="form-control" name="maps" placeholder="Optional link bila ada">

                            @error('maps')
                            <div class="alert alert-danger mt-2">
                                {{ ('isi cuy mapsnya') }}
                            </div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <label class="font-weight-bold">Detail</label>
                            <textarea class="form-control @error('detail') is-invalid @enderror" name="detail" rows="5" placeholder="Masukkan Detail Agenda">{{ old('detail') }}</textarea>

                            <!-- error message untuk detail -->
                            @error('detail')
                                <div class="alert alert-danger mt-2">
                                    {{ ('isi cuy detailnya') }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Gambar Sampul</label>
                            <input type="file" class="form-control @error('img_agenda') is-invalid @enderror" name="img_agenda">

                            <!-- error message untuk title -->
                            @error('img_agenda')
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
