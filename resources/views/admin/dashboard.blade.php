<x-app-layout>
    <x-slot name="header">
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>
    <div>
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
              <h2 class="font-weight-bold mb-3">Product List</h2>
              <table class="table table-bordered table-hovered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Qty</th>
                    <th>Price/th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $index=>$product)
                  <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$product -> name}}</td>
                    <td>{{$product -> image}}</td>
                    <td>{{$product -> description}}</td>
                    <td>{{$product -> qty}}</td>
                    <td>{{$product -> price}}</td>
                  </tr>  
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <h2 class="font-weight-bold mb-3">Create Product</h2>
              <form>
                <div>
                  <label>Product name</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('name') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div>
                  <label>Product image</label>
                  <div class="custom-file">
                    <input wire:model="image" type="file" class="custom-file-input" id="custom">
                    <label for="customFile" class="custom-file-label">Masukkan Gambar</label>
                    @error('name') <small class="text-danger">{{$message}}</small>   
                    @enderror
                  </div>
                  
                </div>
                <div>
                  <label>Product name</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('name') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div>
                  <label>Product name</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('name') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div>
                  <label>Product name</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('name') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home">Dasboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="input">Input Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="laporan">Laporan</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    @livewireScripts
</x-app-layout>
