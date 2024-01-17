@extends('layouts.Front.master')

@section('title')
Kurikulum
@endsection

@section('konten')

<div id="visi_misi" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><i class="fa-solid fa-house"></i> <a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>
        <h1>Kurikulum Akademik</h1>

        <img src="{{ asset('Assets/Images/Profil/kurikulum.png') }}" alt="" width="100%" height="auto" class="my-3 mb-4">

          <p>
            <b>Kurikulum </b> adalah seperangkat rencana dan pedoman pembelajaran yang mencakup tujuan, materi pelajaran, metode pengajaran, serta cara penilaian dan evaluasi yang digunakan dalam suatu program pendidikan. Secara umum, kurikulum merinci apa yang harus diajarkan kepada siswa dan bagaimana cara melakukannya.
          </p>

          <p>
            Sistem pembelajaran di AMIK-YPAT mengacu kepada Standar Penjamin Mutu yang di buat oleh Satuan Penjaminan Mutu Internal (SPMI) dan Manual Mutu Pembelajaran yang dibuat Unit Penjaminan Mutu di tingkat Akademik. Sentra Pelayanan Akademik (SPA) AMIK-YPAT merupakan pelaksana monitoring harian pembelajaran meliputi: input kehadiran dosen dan mahasiswa dalam perkuliahan dan input materi perkuliahan. Pembantu Direktur Bidang Akademik dibantu Staf Khusus Bidang Monitoring dan Evaluasi Pembelajaran melakukan monitoring dan evaluasi pembelajaran meliputi kehadiran dosen dan kesesuaian RPS dengan materi dosen dalam perkuliahan. Hasil monitoring dan evaluasi pembelajaran di laporkan ke Ketua Program Studi untuk ditindak lanjuti.
          </p>

          <p>
            Suasana akademik di AMIK-YPAT dibangun oleh sivitas akademika dengan adanya kebebasan, kebebasan mimbar akademik, dan otonomi keilmuan. Suasana akademik di AMIK-YPAT dibangun dengan rasa tanggung jawab, kejujuran, dan bersifat ilmiah. Kebebasan akademik di AMIK-YPAT dilaksanakan dosen dengan diberi kesempatan untuk mengembangkan potensi dan disiplin keilmuan yang dimiliki. Kebebasan mimbar akademik di AMIK-YPAT dilakukan sesuai dengan kebutuhan dan program terencana untuk memungkinkan dosen dan mahasiswa menyampaikan pikiran dan pendapat akademik dalam forum akademik, seperti seminar, lokakarya, dan workshop. Forum akademik dapat dilaksanakan sesuai dengan bidang ilmu dan bidang peminatan sivitas akademika. Otonomi keilmuan di AMIK-YPAT merupakan kemandirian dan kebebasan suatu cabang ilmu pengetahuan dan teknologi yang dilakukan secara bottom-up. Dalam upaya melaksanakan kebebasan mimbar Akademi dan Program Studi diberi otonomi yang luas untuk mengembangkan bidang keilmuan yang diampu sebagai upaya peningkatan kemampuan pengembangan keahlian serta daya saing keilmuan.
          </p>

          <p>

          </p>


    </div>
</div>

@endsection
