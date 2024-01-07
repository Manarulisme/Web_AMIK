@extends('layouts.Admin.master')



@section('isi')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                <h1>
                    @section('title')
                    # All Post
                    @endsection
                </h1>
                    <a href="{{ route('posts.create') }}" class="btn btn-md btn-success mb-3">TAMBAH POST</a>
                    <table class="table table-bordered" id="example" style="width: 100%;">
                        <thead>
                          <tr class="text-center">
                            <th scope="col">NO.</th>
                            <th scope="col">SAMPUL</th>
                            <th scope="col">DAFTAR POST</th>
                            <th scope="col">AKSI</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($posts as $post)
                            <tr>
                                <td class="text-center">{{ ++$i; }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/images/'.$post->img_sampul) }}" class="rounded" style="width: 70px">
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $post->judul }}</span>
                                    {!! $post->detail !!}
                                    <span>Kategori: {{ $post->Kategori->name  }}</span> |
                                    <span>Objek: {{ $post->Objek->nama  }}</span>
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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



