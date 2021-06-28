<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">

        {{-- BANNER --}}
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ url('assets/slider/slider1.png') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ url('assets/slider/barcaa.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- PILIH LIGA  --}}
        <section class="pilih-liga mt-4">
           <h3><strong>Pilih Liga</strong></h3>
           <div class="row">
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets//liga/seriea.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets//liga/premierleague.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets//liga/ligue1.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets//liga/bundesliga.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets//liga/laliga.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"></h5>
                </div>
            </div>
        </section>
      
        {{-- BEST PRODUCT  --}}
        <section class="products mt-5 mb-5">
           <h3>
              <strong>Best Products</strong>
              <a href="" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
           </h3>
           
            <div class="row">
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets/jersey/acmilan.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ac Milan</h5>
                  <p class="card-text">jersey Ac Milan Original</p>
                  <p class="card-text">Made in USA</p>
                  <p class="card-text">Rp 1.000.000</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <a href="#" class="btn btn-primary">Check Out</a>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets/jersey/asroma.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">As Roma</h5>
                  <p class="card-text">jersey As Roma Original</p>
                  <p class="card-text">Made in USA</p>
                  <p class="card-text">Rp 1.000.000</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <a href="#" class="btn btn-primary">Check Out</a>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets/jersey/lazio.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Lazio Fc</h5>
                  <p class="card-text">jersey Lazio Original</p>
                  <p class="card-text">Made in California</p>
                  <p class="card-text">Rp 1.000.000</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <a href="#" class="btn btn-primary">Check Out</a>
                </div>
            </div>
            <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                <img src="{{ url('assets/jersey/mu.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Manchester United</h5>
                  <p class="card-text">jersey Manchester United Original</p>
                  <p class="card-text">Made in England</p>
                  <p class="card-text">Rp 1.000.000</p>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <a href="#" class="btn btn-primary">Check Out</a>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
