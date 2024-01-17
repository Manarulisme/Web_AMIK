@extends('layouts.Front.master')

@section('title')
Struktur Organisasi
@endsection

@section('konten')
<div id="struktur_organisasi" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>

        <img src="{{ asset('Assets/Pdf/Struktur organisasi AMIK-YPAT-1.png')}}" alt="" width="100%" height="auto">

        <p>
            AMIK-YPAT merupakan lembaga pendidikan tinggi yang memiliki tugas dan fungsi melaksanakan pendidikan pada jenjang D3. Di AMIK-YPAT terdapat satu program studi yaitu Manajemen Informatika. AMIK-YPAT mempunyai struktur organisasi yang lengkap dari tingkat Akademik sampai unit-unit terkecil yang mendukung kegiatan operasional seluruh aktivitas akademik, administrasi dan keuangan, kemahasiswaan dan alumni, serta hubungan antar lembaga. Sistem tata pamong AMIK-YPAT terangkum dalam Keputusan Direktur tentang Sistem Organisasi dan Tata Laksana AMIK-YPAT.
        </p>

        <p>
            AMIK-YPAT dipimpin oleh Direktrur, yang merupakan pimpinan tertinggi Akademik dalam pengelolaan dan pengembangan pendidikan, penelitian dan pengabdian kepada masyarakat, membina dosen, mahasiswa, pegawai administrasi, serta pelaksanaan hubungan dan atau kerjasama dengan pihak- pihak di luar akademik yang bertanggungjawab kepada Yayasan. Dalam melaksanakan tugasnya, Direktur dibantu oleh tiga orang Pembantu Direktur (Pudir) untuk mewujudkan pelaksanaan Tri Dharma Perguruan Tinggi di AMIK-YPAT. Pola kepemimpinan dilaksanakan secara kolektif / bersama-sama di antara pimpinan lainnya, namun keputusan akhir berada di tangan Direktur di tingkat Akademik, setelah mempertimbangkan masukan-masukan yang ada. Pola kepemimpinan ini telah berjalan kondusif serta memungkinkan terjadinya pemerataan sumber daya. Hal ini ditunjukkan dengan lancarnya proses akademik, administrasi dan keuangan serta bidang kemahasiswaan selama ini. Mekanisme ini pada akhirnya dapat menciptakan tata laksana proses belajar mengajar dan program kerja yang telah ditetapkan berjalan lancar Pola kepemimpian di AMIK-YPAT, dalam hal pengambilan keputusan, menganut sistem sentralisasi untuk bidang administrasi, keuangan dan sumberdaya manusia, serta sistem desentralisasi untuk bidang akademik dan kemahasiswaan. Sistem pengelolaan AMIK-YPAT mengacu pada berbagai ketentuan yang ada di Statuta, Rencana Strategis, Rencana Operasional dan Surat Keputusan Direktur.
        </p>

        <p>
            Pengelolaan mutu secara internal pada tingkatan Akademik dilaksanakan oleh Lembaga Sistem Penjaminan Mutu Internal (SPMI). Dalam kerjanya, SPMI akan melakukan audit kinerja masing-masing unit kerja di AMIK-YPAT setiap akhir semester pada jadwal yang sudah ditentukan. Instrumen untuk melakukan penilaian adalah Manual Mutu dari unit kerja yang dilakukan audit.
        </p>


    </div>
</div>
@endsection
