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
                    <a href="{{ route('agendaterdekat.create') }}" class="btn btn-md btn-success mb-3">TAMBAH AGENDA</a>
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
                          @forelse ($agendas as $agenda)
                            <tr>
                                <td class="text-center">{{ ++$i; }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/agenda/'.$agenda->img_agenda) }}" class="rounded" style="width: 70px">
                                </td>
                                <td>
                                    <span class="font-weight-bold">{{ $agenda->judul }}</span>
                                    {!! $agenda->detail !!}
                                    <span>Tanggal: {{ date('d F Y',  strtotime($agenda->date_start)) }} s.d {{ date('d F Y', strtotime($agenda->date_finish)) }}</span> |
                                    <span>Waktu: {{ $agenda->time_start  }} - {{ $agenda->time_finish }}</span> | <span>Lokasi: {{ $agenda->lokasi }}</span></br>
                                    <span>Link Maps: <a href="{{ url($agenda->maps)}}" target="_blank">{{ $agenda->maps }}</a></span>
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('agendaterdekat.destroy', $agenda->id) }}" method="POST">
                                        <a href="{{ route('posts.show', $agenda->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                        <a href="{{ route('posts.edit', $agenda->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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



