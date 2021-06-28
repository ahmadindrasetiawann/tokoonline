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
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($products as $index=>$product)
                  <tr>
                    <td>{{$index + 1}}</td>
                    <td>{{$product -> name}}</td>
                    <td><img src="{{ asset('storage/images',$product->image)}}" alt="product image" class="img-fluid"></td>
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
              <form wire:submit.prevent="store">
                <div class="form-group">
                  <label>Product name</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('name') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div class="form-group">
                  <label>Product image</label>
                  <div class="custom-file">
                    <input wire:model="image" type="file" class="custom-file-input" id="custom">
                    <label for="customFile" class="custom-file-label">Masukkan Gambar</label>
                    @error('image') <small class="text-danger">{{$message}}</small>   
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label>desvription</label>
                  <textarea wire:model="description" type="" class="form-control"></textarea>
                  @error('description') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div class="form-group">
                  <label>Qty</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('qty') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input wire:model="name" type="" class="form-control">
                  @error('price') <small class="text-danger">{{$message}}</small>   
                  @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Simpan Produk</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h2 class="font-weight-bold mb-3">Laporan Bulanan Store</h2>
            <table class="table table-bordered table-hovered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Bulan</th>
                  <th>Jumlah</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <th>Januari</th>
                  <th>1000000</th>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <th>Februari</th>
                  <th>2000000</th>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <th>Maret</th>
                  <th>3000000</th>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <th>April</th>
                  <th>2000000</th>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <th>Mei</th>
                  <th>2000000</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @livewireScripts
</x-app-layout>
