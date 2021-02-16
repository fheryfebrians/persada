@extends('frontend.layout.app')
@section('title', '| Galeri Tim K3')
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


    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="../index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Galeri Tim K3</span>
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
                        @foreach ($k3 as $k3)
                        <div class="element-item tulangan">
                            <a class="popup-with-move-anim" href="#proyek{{ $k3->id }}">
                                <div class="element-item-overlay">
                                    <span>{!! $k3->keterangan !!}</span>
                                </div>
                                <img src="{{ asset('storage/galeri/'. $k3->foto) }}" alt="">
                            </a>
                        </div>
                        <div id="proyek{{ $k3->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                    		<div class="row">
                    			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                <img class="img-fluid" src="{{ asset('storage/galeri/'. $k3->foto) }}" alt="alternative">
                            </div>
                        </div>
                        @endforeach
                    </div>
                    
                </div> 
            </div>
		</div>
    </div>

@endsection