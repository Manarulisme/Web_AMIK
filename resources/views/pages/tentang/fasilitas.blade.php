@extends('layouts.Front.master')

@section('title')
Fasilitas Kampus
@endsection

@section('konten')

<div id="sambutan_rektor" class="bg-light py-5">
    <div class="container bg-white p-5 rounded">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ url('/') }}">Beranda</a></li>
              <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
            </ol>
          </nav>



          <h1>Fasilitas Kampus</h1>
          <div class="img-fluid my-3">
            <img src="{{ asset('Assets/Images/Profil/fasilitas_kampus.png') }}" alt="" width="100%" height="auto">
          </div>

          <div class="h5 pb-2 my-4 text-danger border-bottom border-danger">Selamat Datang di Kampus Inovatif Berkualitas Tinggi!</div>
          <p>
            Kampus kami menawarkan beragam fasilitas yang dirancang untuk mendukung pengalaman belajar yang optimal bagi mahasiswa. Dengan komitmen untuk memberikan lingkungan belajar yang kondusif dan modern, kami terus meningkatkan fasilitas kami untuk memenuhi kebutuhan seluruh komunitas kampus.
          </p>
          <h5>1. Perpustakaan Berstandar Nasional</h5>
          <p>
            Perpustakaan kami dilengkapi dengan koleksi buku-buku terbaru, jurnal-jurnal ilmiah, dan sumber daya pembelajaran digital. Ruang studi kelompok dan individu yang nyaman membuat mahasiswa dapat fokus dalam proses belajar mereka.
          </p>

          <h5>2. Laboratorium Komputer Teknologi Terkini</h5>
          <p>
            Fasilitas laboratorium kami dilengkapi dengan peralatan komputer teknologi terkini untuk mendukung mahasiswa dalam eksplorasi dan penelitian. Mahasiswa memiliki akses ke perangkat keras dan perangkat lunak terkini untuk meningkatkan keterampilan praktis mereka.
          </p>

          <h5>3. Ruang Kelas Interaktif</h5>
          <p>
            Ruang kelas kami didesain dengan konsep pembelajaran interaktif. Dilengkapi dengan proyektor pintar dan konektivitas internet yang stabil untuk mendukung proses belajar mengajar yang efektif. Tak lupa setiap ruangan kami fasilitasi juga dengan AC untuk memberikan kenyamanan saat kuliah.
          </p>

          <h5>4. Pusat Karir dan Pengembangan Profesional</h5>
          <p>
            Untuk membantu mahasiswa mempersiapkan karir mereka, kampus kami memiliki Pusat Karir yang menyediakan sumber daya, pelatihan, dan dukungan untuk mengembangkan keterampilan yang diperlukan dalam dunia profesional.
          </p>

          <h5>5. Wi-Fi Berkecepatan Tinggi</h5>
          <p>
            Untuk membantu mahasiswa mempersiapkan karir mereka, kampus kami memiliki Pusat Karir yang menyediakan sumber daya, pelatihan, dan dukungan untuk mengembangkan keterampilan yang diperlukan dalam dunia profesional.
          </p>

          <h5>6. Toilet Yang Bersih dan Nyaman</h5>
          <p>
            Di kampus kami, kenyamanan dan kebersihan fasilitas toilet adalah prioritas utama. Kami memahami bahwa toilet yang bersih dan nyaman berperan penting dalam menciptakan pengalaman sehari-hari yang positif bagi seluruh anggota kampus. Memberikan informasi dan edukasi dalam menjaga kebersihan, juga layanan pemeliharaan secara berkala dan berkelanjutan.
          </p>

          <h5>7. Tempat Beribadah</h5>
          <p>
            Di kampus kami, kami mengakui pentingnya menyediakan fasilitas beribadah yang mendukung keberagaman dan kesejahteraan spiritual seluruh anggota komunitas. Berbagai fasilitas telah dirancang untuk menciptakan lingkungan yang ramah dan mengakomodasi kebutuhan beribadah, memungkinkan setiap individu untuk menjalankan praktik keagamaannya dengan nyaman.
          </p>

          <div class="h5 pb-2 my-2 text-danger border-bottom border-danger">

          </div>
          <p>
            Demikian fasilitas yang kami miliki. Mari kita  tingkatkan kesadaran dan tanggung jawab kita sebagai bagian dari komunitas kampus. Dengan menjaga fasilitas dengan baik, kita turut berkontribusi dalam menciptakan lingkungan yang positif dan produktif bagi semua. Terima kasih atas kerjasama dan dukungan semuanya.
          </p>

    </div>
</div>

@endsection
