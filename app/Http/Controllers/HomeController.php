<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product as ProductModel;
use Illuminate\Support\Facades\DB;
use App\Models\Laporan as LaporanModel;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    use WithFileUploads;
    public $name,$image,$description,$qty,$price;
    public $nama,$Bulan,$Jumlah;

    public function index()
    {
        $role=Auth::user()->role;
        if($role=='1')
        {
            $products = ProductModel::orderBy('created_at', 'DESC')->get();
            return view('livewire.product',[
                'products' => $products
            ]);
            $laporanS = DB::table('laporan')->get();
            return view('livewire.product',[
                'laporans' => $laporans
            ]);
        }
        else
        {
            return view('dashboard');
        }
    }
    public function previewImage(){
        $this->validate([
            'image' => 'image|max:2048'
        ]);
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'image' => 'image|max:2048|required',
            'description' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);
        $imageName = md5($this->image.microtime().'.'.$this->image->extension());
        Storage::putFileAs(
            'public/images',
            $this->image,
            $imageName
        );
        ProductModel::create([
            'name' => $this->name,
            'image' => $imageName,
            'description' => $this->description,
            'qty' => $this->qty,
            'price' => $this->price,
        ]);
        session()->flash('info','Produk Succesfully');

        $this->name ='';
        $this->image ='';
        $this->description ='';
        $this->qty ='';
        $this->price ='';
    }
}
