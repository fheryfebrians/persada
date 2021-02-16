@extends('frontend.layout.app')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <ul class="cb-slideshow">
                @foreach ($banners as $banner)
                    <li class="unstyled">
                        <img src="{{ asset('storage/banner/'.$banner->banner) }}" alt="" class="img-full">
                    </li>
                @endforeach
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-container">
                                <p class="p-heading p-large">
                                    CV.Beton Emas Persada adalah Perusahaan mitra terpercaya dalam industri penyedia jasa beton pracetak dan konstruksi 
                                </p>
                                <a class="btn-solid-lg page-scroll" href="#">DISCOVER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->


    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="text-container">
                        <div class="section-title">Sekilas Tentang Kami</div>
                        <h2>Beton Emas Persada</h2>
                        <p>{!! $profiles->profile !!}</p>                        
                        
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7">
                    <div class="image-container">
                        <img class="img-fluid" src="{{ asset('frontend/images/headerbg.jpg') }}" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-handshake fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <p>Loyalitas terhadap pelanggan dengan mengedepankan kepuasan dan kepercayaan</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-user-cog fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <p>Didukung tenaga ahli profesional dan berpengalaman diberbagai bidang</p>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <p>Tepat waktu, dan selalu mengedepankan kulaitas dan K3</p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Details 1 -->
	<div id="visimisi" class="accordion">
		<div class="area-1">
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>Visi & Misi</h2>
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="accordion-title">Visi</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        {!! $profiles->visi !!}
                    </div>
                </div> <!-- end of item -->

                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                        <span class="accordion-title">Misi</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <ul class="list-unstyled li-space-lg indent">
                            @foreach ($misis as $misi)
                                <li class="media">
                                    <i class="fas fa-dot-circle"></i>
                                    <div class="media-body">{{ $misi->misi }}</div>
                                </li>
                            @endforeach
                           
                        </ul>
                    </div>
                   
                </div> <!-- end of item -->
            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->

		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->
            </div> <!-- end of tabs-container -->
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->

    
    <!-- Projects -->
	<div id="proyek" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">PROYEK</div>
                    <h2>Projects That We're Proud Of</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter=".tulangan"><span>TULANGAN</span></a>
                        <a class="button" data-filter=".produksi"><span>PRODUKSI</span></a>
                        <a class="button" data-filter=".finishing"><span>FINISHING</span></a>
                        <a class="button" data-filter=".utilitas"><span>UTILITAS PABRIK</span></a>
                        <a class="button" data-filter=".k3"><span>K3</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="tulangan">
                            @foreach ($tulangan as $tul)
                                <div class="element-item">
                                    <a class="popup-with-move-anim" href="#proyek{{ $tul->id }}">
                                        <div class="element-item-overlay">
                                            <span>{!! $tul->keterangan !!}</span>
                                        </div>
                                        <img src="{{ asset('storage/galeri/'. $tul->foto) }}" alt="">
                                    </a>
                                </div>
                                <div id="proyek{{ $tul->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            		<div class="row">
                            			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                        <img class="img-fluid" src="{{ asset('storage/galeri/'. $tul->foto) }}" alt="alternative">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="produksi">
                            @foreach ($produksi as $pro)
                                <div class="element-item">
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
                        <div class="finishing">
                            @foreach ($finishing as $finish)
                                <div class="element-item">
                                    <a class="popup-with-move-anim" href="#proyek{{ $finish->id }}">
                                        <div class="element-item-overlay">
                                            <span>{!! $finish->keterangan !!}</span>
                                        </div>
                                        <img src="{{ asset('storage/galeri/'. $finish->foto) }}" alt="">
                                    </a>
                                </div>
                                <div id="proyek{{ $finish->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            		<div class="row">
                            			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                        <img class="img-fluid" src="{{ asset('storage/galeri/'. $finish->foto) }}" alt="alternative">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="utilitas">
                            @foreach ($utilitas as $utilitas)
                                <div class="element-item">
                                    <a class="popup-with-move-anim" href="#proyek{{ $utilitas->id }}">
                                        <div class="element-item-overlay">
                                            <span>{!! $tul->keterangan !!}</span>
                                        </div>
                                        <img src="{{ asset('storage/galeri/'. $tul->foto) }}" alt="">
                                    </a>
                                </div>
                                <div id="proyek{{ $utilitas->id }}" class="lightbox-basic zoom-anim-dialog mfp-hide">
                            		<div class="row">
                            			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
                                        <img class="img-fluid" src="{{ asset('storage/galeri/'. $tul->foto) }}" alt="alternative">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="k3">
                             @foreach ($k3 as $k3)
                                <div class="element-item">
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
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <!-- Filter -->
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter=".proyek"><span>PROYEK</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="proyek">
                            @foreach ($proyek as $pro)
                                <div class="element-item">
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
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

@endsection