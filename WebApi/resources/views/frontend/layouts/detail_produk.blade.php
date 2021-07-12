@extends('frontend.layouts.layout')
@section('content')
<div class="container" style="padding-top:140px; padding-bottom:140px;">
    <div class="row" style="background-color:white; padding:20px;">
    <div class="col-md-8">
        <form action="{{ url($dok->id)}}" method="post" enctype="multipart/form-data">
            <img src="{{ asset($dok->sampul)}}"  class="card-img-top" alt="...">
        </div>
    
        <div class="col-md-4">
        <h3 class="my-3">{{ $dok->namaproduk }}</h3>
        <p>{{ $dok->deskripsi }}</p>
        <h3 class="my-3">Detail Produk</h3>
        <ul>
            <li>Berat : {{ $dok->berat }}Kg</li>
            <li>Stok  : {{ $dok->stok }}</li>
        </ul>
            <h5 class="card-text text-justify">
                <b>Harga : Rp {{ $dok->harga }}</b>
            </h5>
            <a href="../transaksi" class="btn btn-success float-right">Pesan</a>
        </form>
    
    </div>
    </div>
    </div>
<br>
@endsection