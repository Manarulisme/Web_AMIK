@extends('layouts.Front.master')

@section('title')
Beranda
@endsection

@section('konten')
<div>
    <div id="slide_show">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="2000">
                <img src="Assets/Images/slideshow/slideshow1.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="Assets/Images/slideshow/slideshow2.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="Assets/Images/slideshow/slideshow3.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="Assets/Images/slideshow/slideshow4.jpeg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="Assets/Images/slideshow/slideshow5.jpeg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>

    <div id="headline" style="background-color: #f3f3f3;">
        <div class="container">
            <h2 class="text-center">Pidato Ketua Yayasan AMIK YPAT Purwakarta 2023</h2>
            <div class="row">
                <div class="col-4 ">
                    <img src="Assets/Images/Profil/ketua_yayasan.jpg" alt="" width="200px" height="150px">
                </div>
                <div class="col-8" style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis ea exercitationem qui, rem vel sint tempore! Consequuntur optio similique facere repellat recusandae, quidem voluptas dolore ut accusamus officia nihil.Molestias maiores ex itaque repellendus error nobis? Quaerat, aut quasi officia quisquam dolorum adipisci quo velit veniam culpa sit eligendi tempora beatae ipsum repellat molestias reiciendis, asperiores nostrum eos voluptatibus.
                </div>
            </div>
            <div class="text-center">
                <button>Selengkapnya</button>
            </div>
        </div>
        </div>


    <div id="info_kampus">
        <div class="container">
            <h2 class="text-center">Informasi Kampus Kita</h2>
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                    <span>Icon</span>
                    <span>Date</span>
                    <button>Kategori</button>
                </div>
              </div>
        </div>

    </div>

    <div id="agenda">
        <div class="container">
            <h2 class="text-decoration-underline">Agenda Terdekat</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Judul Agenda</h5>
                      <p class="card-text">Tanggal</p>
                      <p class="card-text">Lokasi</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>

    <div id="video_kampus">
        <div class="bg-danger text-white">
            <div class="container">
                <div class="row">
                    <div class="col"> <h1>Kanal video kampus</h1>
                        <p>Selalu ada hal menarik yang berasal dari dalam kampus, dosen, mahasiswa,
                            staff ataupun alumni yang kami tampilkan pada video dibawah ini :</p></div>
                    <div class="col">
                        <div class="text-center">
                            <button>Klik Disini</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
