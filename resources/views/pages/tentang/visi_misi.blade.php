@extends('layouts.Front.master')

@section('title')
Visi dan Misi
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
        <h1>VISI DAN MISI AMIK YPAT Purwakarta</h1>

        <img src="{{ asset('Assets/Images/artikel/background_AMIKYPAT.jpg') }}" alt="" width="100%" height="auto" class="mt-2 mb-4">
          <p>
            Visi dan misi adalah dua komponen penting dalam perencanaan strategis suatu organisasi, baik itu perusahaan, lembaga pendidikan, atau entitas lainnya. Kedua elemen ini membantu menentukan arah dan tujuan jangka panjang organisasi. Begitupun dengan visi misi yang dimiliki AMIK YPAT Purwakarta. Penentuan Visi, Misi, Tujuan, dan Sasaran AMIK-YPAT dikaji dari berbagai masukan yang melibatkan sejumlah pihak seperti pimpinan Yayasan, Akademik, Alumni, pengguna alumni, para pakar serta stakeholder yang kompeten dan relevan.
        </p>

        <h4>VISI</h4>
        <blockquote class="blockquote">
            <i>
                 “Menjadi perguruan tinggi yang berbasis Teknologi Informasi yang mampu mencerdaskan kehidupan bangsa yang berahlaqul kharimah.”
              </i>
        </blockquote>

          <h4>MISI</h4>
          <p>
            <ol>
                <li>
                    Menyelenggarakan pendidikan dan pembelajaran yang berkualitas serta mencetak Lulusan yang memiliki kualifikasi di bidang tehnologi informasi
                </li>
                <li>
                    Mengembangkan ilmu Teknologi informasi untuk meningkqtkqn kualitas Sumber Daya Manusia dan Taraf Hidup Masyarakat dengan Landasan Iman dan Taqwa kepada Tuhan Yang Maha Esa.
                </li>
            </ol>
          </p>
          <div class="h4 pb-2 mb-4 text-danger border-bottom border-black-50">
          </div>

          <p>
            Selain dari visi dan misi, AMIK YPAT Purwakarta juga memiliki tujuan, sasaran dan strategi pencapaian yang mendukung tercapainya visi dibagi menjadi bidang: 1) Pendidikan; 2) Penelitian; dan Pengabdian kepada Masyarakat; 3) Pengembangan ilmu dan kebudayaan. Strategi pencapaian masing-masing bidang terlihat dari indikator kinerja dan target pencapaian per tahun yang tertuang pada Renstra.
          </p>

          <p>
            Tujuan dalam bidang pendidikan adalah “Menyelenggarakan pendidikan bagi mahasiswa AMIK-YPAT yang mampu bersaing di tingkat nasional dan internasional yang sesuai dengan perkembangan ilmu pengetahuan dan teknologi serta mampu memenuhi tuntutan masyarakat dari waktu ke waktu, dengan sasaran : 1) Tercapainya lulusan yang mampu bersaing di tingkat nasional dan internasional sesuai kebutuhan masyarakat pengguna lulusan, dan 2) Terwujudnya kemampuan civitas akademika yang mandiri, mampu mengkaji dan meneliti, menganalisis permasalahan yang ada di masyarakat standar pendidikan nasional.
          </p>

          <p>
            Tujuan dalam bidang penelitian dan pengabdian kepada masyarakat adalah menjadi akademik yang mampu menyelenggarakan dan mengembangkan kegiatan penelitian dosen guna menghasilkan karya ilmiah bertaraf nasional dan Internasional dan bermanfaat bagi pengembangan ilmu pengetahuan dan teknologi, dengan sasaran; 1) Terwujudnya kemampuan dosen yang mampu pengembangkan penyelenggaraan pengajaran yang bertaraf internasional dengan mencapai kompetensi sesuai standar pendidikan nasional, dan 2) tercapainya karya ilmiah dosen yang memenuhi standar jurnal ilmiah terakreditasi, baik di tingkat nasional maupun internasional sebagai rujukan bagi pengembangan ilmu pengetahuan dan teknologi.
          </p>

          <p>
            Tujuan pengembangan ilmu dan kebudayaan adalah menjadi Akademik dengan infastruktur yang handal dan dapat dikembangkan mengikuti perkembangan kebutuhan pemangku kepentingan di lingkungan internal dan eksternal dari waktu ke waktu, dengan sasaran; 1) Terwujudnya pengembangan AMIK-YPAT dengan dukungan infakstruktur handal yang dapat dikembangkan secara continue dan berkesinambungan untuk melayani semua kebutuhan pemangku kepentingan yang bergerak dinamis dari waktu ke waktu, dan 2) Tercapainya kinerja infakstruktur yang memenuhi kualifikasi dan standar yang dibutuhkan untuk melayani kebutuhan administrasi dan manajemen, kebutuhan perkuliahan, laboratorium (penelitian) dan kebutuhan pengembangkan minat dan bakat bagi sivitas akademika dalam bidang olahraga, seni dan budaya.
          </p>



    </div>
</div>

@endsection
