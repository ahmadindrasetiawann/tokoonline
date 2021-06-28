<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('produk') }}
        </h2>
    </x-slot>

   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">

        <div class="container">
            <div class="row mb-2">
                <div class="col">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">All Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        
            <div class="row">
                <div class="col-md-9">
                    <h2></h2>
                </div>
                <div class="col-md-3">
                    <div class="input-group mb-3">
                        <input wire:model="search" type="text" class="form-control" placeholder="Cari apa hari ini?" aria-label="Search"
                            aria-describedby="basic-addon1">
                        
                    </div>
                </div>
            </div>
        
            <section class="products mb-5">
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
                          <a href="" class="btn btn-primary">Check Out</a>
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
                          <a href="" class="btn btn-primary">Check Out</a>
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
                          <a href="" class="btn btn-primary">Check Out</a>
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
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/madrid.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Real Madrid</h5>
                          <p class="card-text">jersey Real Madrid Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/liverpool.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Liverpool Fc</h5>
                          <p class="card-text">jersey Liverpool Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/tottenham.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Tottenham Fc</h5>
                          <p class="card-text">jersey Tottenham Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/munchen.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Fc Bayern munchen</h5>
                          <p class="card-text">jersey Liverpool Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/juve.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Juventus Fc</h5>
                          <p class="card-text">jersey Juventus Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/chelsea.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">chelsea Fc</h5>
                          <p class="card-text">jersey Liverpool Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/dortmund.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Borusia Dortmund Fc</h5>
                          <p class="card-text">jersey Borusia dortmund Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                    <div class="card mr-2 ml-2 mb-5" style="width: 15rem;">
                        <img src="{{ url('assets/jersey/leicester.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Leichester Fc</h5>
                          <p class="card-text">jersey Leichester Fc Original</p>
                          <p class="card-text">Made in USA</p>
                          <p class="card-text">Rp 1.000.000</p>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star"></i>
                          <i class="fas fa-star-half-alt"></i>
                          <a href="" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        
                <div class="row">
                    <div class="col">
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>
