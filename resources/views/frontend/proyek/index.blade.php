@extends('frontend.layout.app')
@section('title', '| Proyek')
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


	<div id="galeri" class="filter">
		<div class="container">  
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="grid">
                        @foreach ($proyek as $pro)
                        <div class="element-item proyek">
                            <a class="popup-with-move-anim" href="#proyek{{ $pro->id }}">
                                <div class="element-item-overlay">
                                    <span>{!! $pro->keterangan !!}</span>
                                </div>
                                <img src="{{ asset('storage/proyek/'. $pro->foto) }}" alt="">
                            </a>
                        </div>
                        <div id="proyek{{ $pro->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            <div class="row">
                                <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                <div class="col-lg-8">
                                    <img class="img-fluid" src="{{ asset('storage/proyek/'. $pro->foto) }}" alt="alternative">
                                </div> <!-- end of col -->
                                <div class="col-lg-4">
                                    <h3>{!! $pro->keterangan !!}</h3>
                                    <!--<hr class="line-heading">-->
                                    <!--<h6>Strategy Development</h6>-->
                                    <!--<p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>-->
                                    <!--<p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>-->
                                    <!--<div class="testimonial-container">-->
                                    <!--    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>-->
                                    <!--    <p class="testimonial-author">General Manager</p>-->
                                    <!--</div>-->
                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div>
                        @endforeach
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    

@endsection