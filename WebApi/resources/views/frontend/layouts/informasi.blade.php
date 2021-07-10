@extends('frontend.layouts.layout')
@section('content')
<br>
<div class="container">
    <section class="banner_main">
               <div class="container-fluid">
                  <div class="row d_flex">
                     <div class="col-md-5">
                        <div class="text-bg">
                        <h1 id="home"><font color="green">INFORMASI</font></h1>
                           <p>Selamat Datang di Halaman Informasi. Dimana merupakan halaman yang berisikan berita terbaru 
                           tentang pertanian yang ada di Indonesia yang dapat diakses melalui website ini.</p>
                        </div>
                     </div>
                     <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img src="{{asset('assets/img/sayuran 3.png')}}" class="img-fluid" >
                </div>
                     </div>
                  </div>
               </div>
            </section>
        </div>
         </div>
         <br>
    <div class="judul-card bg-light">
        <h1 class="display-4">Informasi Pertanian</h1>
        <hr>
    @foreach ($dtInformasi as $item)
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-4">
                    <div class="card h-100">
                        <img src="{{ asset($item->gambar)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h5><b>{{ $item->judul }}</b></h5>
                            <p>{{ $item->caption}}</p>
                            <a href="{{ url('detailinformasi', $item->id) }}" type="button" class="btn btn-outline-success"><i>Baca</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endforeach
    @endsection
