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
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-white">
                        <div class="row">
                            <div class="col-md-6"><h3 class="font-weight-bold">Products List</h3></div>
                            <div class="col-md-6"> <input wire:model="search" type="text" class="form-control" placeholder="Search Products..."></div>                     
                        </div>
                    </div>
                    <div class="card-body">                
                        <div class="row">
                            
                                <div class="col-md-3 mb-3" :key="">
                                    <div class="card" wire:click="" style="cursor:pointer">                 
                                        <img src="" alt="product" style="object-fit: contain  ;width:100%;height:170px">
                                        <button class="btn btn-primary btn-sm" style="position:absolute;top:0;right:0;padding: 10px 15px"><i class="fas fa-cart-plus fa-lg"></i></button>
                                        <h6 class="text-center font-weight-bold mt-2"></h6>
                                        <h6 class="text-center font-weight-bold" style="color:grey"></h6>
                                    </div>
                                </div>
                            <div class="col-sm-12 mt-5">
                                <h2 class="text-center font-weight-bold text-primary">No Products Found</h2>                    
                            </div>                                                            
                        </div>
                        <div style="display:flex;justify-content:center">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-white">
                        <h3 class="font-weight-bold">Cart</h3>                              
                    </div>
                    <div class="card-body">
                        @if(session()->has('error'))
                                <p class="text-danger font-weight-bold">
                                    {{session('error')}}
                                </p>
                        @endif                   
                        <table class="table table-sm table-bordered table-hovered">
                            <thead class="bg-white">
                                <tr >
                                    <th class="font-weight-bold">No</th>
                                    <th class="font-weight-bold">Name</th>
                                    <th class="font-weight-bold">Qty</th>
                                    <th class="font-weight-bold">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <tr>
                                        <td>
                                            
                                            <br>
                                             <i class="fas fa-trash" wire:click="" style="font-size:13px;cursor:pointer;color:grey;"></i>
                                        </td>
                                        <td>
                                        <a href="#" class="font-weight-bold text-dark"></a> 
                                        <br>
                                        <a href=""></a>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" style="padding:7px 10px" wire:click=""><i class="fas fa-plus"></i></button>
                                                
                                            <button class="btn btn-info btn-sm" style="padding:7px 10px"  wire:click=""><i class="fas fa-minus"></i></button>
                                        </td>
                                        <td></td>
                                    </tr>                                
                                
                                    <td colspan="4"><h6 class="text-center">Empty Cart</h6></td>
                               
                            </tbody>
                        </table>              
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h4 class="font-weight-bold">Cart Summary</h4>
                        <h5 class="font-weight-bold"></h5>
                        <h5 class="font-weight-bold"></h5>
                        <h5 class="font-weight-bold" id="oke"></h5>
        
                        <div class="row mt-4">
                            <div class="col-sm-6">
                                 <button wire:click="enableTax" class="btn btn-primary btn-block btn-sm">Add Tax</button>
                            </div>
                            <div class="col-sm-6">
                                  <button wire:click="disableTax" class="btn btn-info btn-block btn-sm">Remove Tax</button>
                            </div>      
                        </div>
                      
                      <div class="form-group mt-4">
                        <input type="number" wire:model="payment" class="form-control" id="payment" placeholder="Input customer payment amount">
                        <input type="hidden" id="total" value="">
                      </div>
        
                        <form wire:submit.prevent="handleSubmit">
                            <div>
                                <label >Payment</label>
                                <h1 id="paymentText" wire:ignore>Rp. 0</h1>
                            </div>
        
                            <div>
                                <label >kembalian</label>
                                <h1 id="kembalianText" wire:ignore>Rp. 0</h1>
                            </div>
                        
                            <div class="mt-4">
                                <button wire:ignore type="submit" id="saveButton" disabled class="btn btn-success btn-block" id="saveButton"><i class="fas fa-save fa-lg"></i> Save Transaction</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @push('script-custom')
            <script>
                payment.oninput = () => {
                    const paymentAmount = document.getElementById("payment").value
                    const totalAmount = document.getElementById("total").value
        
                    const kembalian = paymentAmount - totalAmount
        
                    document.getElementById("kembalianText").innerHTML = `Rp ${rupiah(kembalian)} ,00`
                    document.getElementById("paymentText").innerHTML = `Rp ${rupiah(paymentAmount)} ,00`
        
                    const saveButton =  document.getElementById("saveButton")
        
                    if(kembalian < 0){
                        saveButton.disabled = true
                    }else{
                        saveButton.disabled = false
                    }
                }
        
                const rupiah = (angka) => {
                    const numberString = angka.toString()
                    const split = numberString.split(',')
                    const sisa = split[0].length % 3
                    let rupiah = split[0].substr(0, sisa)
                    const ribuan = split[0].substr(sisa).match(/\d{1,3}/gi)
        
                    if(ribuan){
                        const separator = sisa ? '.' : ''
                        rupiah += separator + ribuan.join('.')
                    }
        
                    return split[1] != undefined ? rupiah + ',' + split[1] : rupiah
                }
            </script>
        @endpush
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </section>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</x-app-layout>

        
        
        

