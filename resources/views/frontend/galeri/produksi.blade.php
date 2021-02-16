@extends('frontend.layout.app')
@section('title', '| Galeri Team Produksi')
@section('content')

    <header id="header" class="header">
        <div class="header-content">
            <ul class="cb-slideshow">
                @foreach ($banners as $banner)
                    <li class="unstyled">
                        <img src="{{ asset('storage/pagebanner/'.$banner->foto) }}" alt="" class="img-full2">
                    </li>
                @endforeach
            </ul>
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="../index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Galeri Tim Produksi</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->
    


    <!-- Projects -->
	<div id="proyek" class="filter">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="grid">
                        @foreach ($produksi as $pro)
                        <div class="element-item tulangan">
                            <a class="popup-with-move-anim" href="#proyek{{ $pro->id }}">
                                <div class="element-item-overlay">
                                    <span>{!! $pro->keterangan !!}</span>
                                </div>
                                <img src="{{ asset('storage/galeri/'. $pro->foto) }}" alt="">
                            </a>
                        </div>
                        <div id="proyek{{ $pro->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                    		<div class="row">
                    			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                <img class="img-fluid" src="{{ asset('storage/galeri/'. $pro->foto) }}" alt="alternative">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div> 
            </div>
		</div>
    </div>

@endsection