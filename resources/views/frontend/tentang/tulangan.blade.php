@extends('frontend.layout.app')
@section('title', '| Team Tulangan')
@section('content')

    <!-- Header -->
    <header id="header" class="ex-header-tulangan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="../index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Tentang Tim Tulangan</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->


    <!-- Terms Content -->
    <div class="ex-basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h3>CV. Beton Emas Persada</h3>
                        <p>CV. Beton Emas Persada merupakan perusahaan yang bergerak dalam bidang pelayanan jasa konstruksi beton pracetak. CV.Beton Emas Persada memiliki 4 bidang pelayanan jasa diantaranya bidang tulangan, bidang pengecoran, bidang finishing dan bidang pekerjaan proyek fasilitas pabrik.</p> 
                        <p>CV.Beton Emas Persada didirikan pada bulan september tahun 2016, Ali mahmudi menjadi sosok dibalik berdirinya perusahaan karena melihat peluang.</p>
                    </div>
                    <div class="text-container last">
                        <h3>Tim Tulangan</h3>
                        <p>Tim tulangan merupakan pekerjaan yang berakaitan dengan besi, adapun uraian pekerjaan seorang tim tulangan :</p>
    
                        <ul class="list-unstyled li-space-lg indent">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Memastikan area kerja tetap bersih</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Memilah dan menempatkan tulangan sesuai dengan ukurannya.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Memotong, membending dan merakit besi menjadi tulangan untuk beton.</div>
                            </li>
                        </ul>
                        <a class="btn-outline-reg" href="{{ url('/') }}">BACK</a>
                    </div> <!-- end of text-container -->
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic -->
    <!-- end of terms content -->

@endsection