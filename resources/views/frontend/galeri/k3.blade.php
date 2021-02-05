@extends('frontend.layout.app')
@section('title', '| Galeri K3')
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
                        <a href="../index.html">Home</a><i class="fa fa-angle-double-right"></i><span>Proyek</span>
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
                        <div class="element-item k3">
                            @foreach ($k3 as $tul)
                                <a class="popup-with-move-anim" href="#project-1">
                                    <div class="element-item-overlay">
                                        <span>{{ $tul->description }}</span>
                                    </div>
                                    <img src="{{ asset('storage/galeri/'. $tul->foto) }}" alt="">
                                </a>
                            @endforeach
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

@endsection