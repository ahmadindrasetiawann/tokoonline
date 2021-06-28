<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Info Cara Transaksi') }}
        </h2>
    </x-slot>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">

    <div class="container">
        <div class="row mt-4 mb-2">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <p>Untuk pembayaran silahkan dapat transfer di rekening dibawah ini : </p>
                        <div class="media">
                            <img class="mr-3" src="{{ url('assets/bri.png') }}" alt="Bank BRI" width="60">
                            <div class="media-body">
                                <h5 class="mt-0">BANK BRI</h5>
                                No. Rekening 012345-678-910 atas nama <strong>Ahmad Indra Setiawan</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="mr-3" src="{{ url('assets/jatimm.jpg') }}" alt="Bank BNI" width="60">
                        <h5 class="card-title">BANK JATIM</h5>
                        <p class="card-text">No. Rekening 098765-432-10 atas nama <strong>Ahmad Indra Setiawan</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                    <img class="mr-3" src="{{ url('assets/bca.jpg') }}" alt="Bank BNI" width="60">
                    <h5 class="card-title">BANK BCA</h5>
                    <p class="card-text">No. Rekening 098765-432-10 atas nama <strong>Ahmad Indra Setiawan</strong></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img class="mr-3" src="{{ url('assets/ovo.png') }}" alt="Bank BNI" width="60">
                        <h5 class="card-title">OVO</h5>
                        <p class="card-text">Kirim ke No = <strong>0851234567</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                    <img class="mr-3" src="{{ url('assets/bni.png') }}" alt="Bank BNI" width="60">
                    <h5 class="card-title">BANK BCA</h5>
                    <p class="card-text">No. Rekening 098765-432-10 atas nama <strong>Ahmad Indra Setiawan</strong></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-body">
                    <p>Atau anda juga bisa membayar lewat sistem COD : </p>
                    <div class="media">
                        <img class="mr-3" src="{{ url('assets/cod.png') }}" alt="Bank BRI" width="60">
                        <div class="media-body">
                            <h5 class="mt-0">COD</h5>
                            <strong>Syarat & Ketentuan berlaku</strong>
                            <p>1. Fitur COD hanya dapat digunakan oleh Member Premium<p>
                            <p>2. Jumlah total pesanan COD yang sedang berlangsung/belum dibayar tidak dapat melebihi Rp 10.000.000</p> 
                            <p>3. Jumlah total pesanan COD yang sedang berlangsung/belum dibayar tidak dapat melebihi 100 pesanan</p>
                            <p>4. Pembayaran COD hanya tersedia untuk produk dengan label COD Tersedia dan di area tertentu</p>
                            <p>5. Pesanan COD (Cash on Delivery) atau Bayar di Tempat dapat dibatalkan dalam waktu 2 jam setelah pesanan dibuat, Anda tidak akan dikenakan sanksi. 
                                Setelah 2 jam, pesanan akan diproses dan tidak bisa dibatalkan dengan alasan apapun</p>
                            <p>6. Namun, jika Anda tetap ingin membatalkan pesanan setelah melewati waktu 2 jam sejak pesanan dibuat, Anda akan dikenakan 1 sanksi</p>
                            <p>7. Jika Pelanggan Anda menolak untuk menerima atau membayar pesanan mereka tanpa alasan yang sah misalnya barang tidak cocok/ berubah pikiran, Anda akan dikenakan 1 sanksi. Jika Anda mendapatkan 4 kali sanksi dalam satu bulan, Anda tidak dapat membuat pesanan COD untuk bulan ini dan 1 bulan berikutnya</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>