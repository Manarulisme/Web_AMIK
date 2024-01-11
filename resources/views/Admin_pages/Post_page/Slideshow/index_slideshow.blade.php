@extends('layouts.Admin.master')



@section('isi')
<link rel="stylesheet" href="{{ asset('Assets/CSS/style.css') }}">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                <h1>
                    @section('title')
                    Slideshows
                    @endsection
                </h1>
<!-- Button trigger modal -->
<button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#slideshowModal">
    Tambah Slideshow
  </button>

  <!-- Modal -->
  <div class="modal fade" id="slideshowModal" tabindex="-1" aria-labelledby="slideshowModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="slideshowModalLabel">Tambah Slideshow</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('slideshow.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judul" class="font-weight-bold @error('judul') is-invalid @enderror">Nama Slideshow</label>
                    <input type="text" id="judul" class="form-control" name="judul">

                    @error('judul')
                    <div class="alert alert-danger mt-2">
                        {{ ('isi cuy judulnya') }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Image Slideshow</label>
                    <input type="file" class="form-control @error('img_slideshow') is-invalid @enderror" name="img_slideshow">

                    <!-- error message untuk title -->
                    @error('img_slideshow')
                        <div class="alert alert-danger mt-2">
                            {{ ('isi cuy fotonya') }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Deskripsi Image</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="5" placeholder="Masukkan deskripsi Slideshow">{{ old('deskripsi') }}</textarea>

                    <!-- error message untuk deskripsi -->
                    @error('deskripsi')
                        <div class="alert alert-danger mt-2">
                            {{ ('isi cuy deskripsinya') }}
                        </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="font-weight-bold">Tambahkan ke Top Slideshow</label>
                    <select name="top_slideshow" class="form-control">
                        <option value="">-Pilih-</option>
                        <option value="Ya">Ya</option>
                        <option value="Tidak">Tidak</option>
                      </select>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
      </div>
    </div>
  </div>

                    <table class="table table-bordered" id="example" style="width: 100%;">
                        <thead>
                          <tr class="text-center">
                            <th scope="col" style="width: 50px;">NO.</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col" style="width: 200px;">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($slideshows as $slideshow)
                            <tr>
                                <td class="text-center">{{ ++$i; }}</td>
                                <td class="">
                                    <img class="zoomslide" src="{{ asset('/storage/slideshow/'.$slideshow->img_slideshow) }}" class="rounded" style="width: 100%; height: 150px;"></br>
                                    <span class="font-weight-bold">{{ $slideshow->judul }}</span></br>
                                    {!! $slideshow->deskripsi !!}</br>
                                    <span>Top Slideshow: <b>{{ $slideshow->top_slideshow }}</b> </span>
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('slideshow.destroy', $slideshow->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                          @empty
                              <div class="alert alert-danger">
                                  Data Post belum Tersedia.
                              </div>
                          @endforelse

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>





@endsection



