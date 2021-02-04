@extends('frontend.layout.app')
@section('content')
    <!-- Header -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1><span id="js-rotating">TIM PRODUKSI, TIM TULANGAN, TIM FINISHING, TIM UTILITAS PABRIK</span></h1>
                            <p class="p-heading p-large">CV. Beton Emas Persada adalah Perusahaan mitra terpercaya dalam industri penyedia jasa beton pracetak dan konstruksi. 
                            </p>
                            <a class="btn-solid-lg page-scroll" href="#intro">DISCOVER</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
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
                        <p>CV Beton Emas Persada merupakan perusahaan yang bergerak dalam bidang pelayanan jasa konstruksi, proyek dan pembuatan beton pracetak dengan tim yang profesional. Perusahaan CV Beton Emas Persada didirikan oleh peran penting satu orang yaitu Ali Mahmudi selaku CEO dari perusahaan yang sekarang menjabat sebagai Direktur Utama. CV Beton Emas Persada didirikan atas dasar ketidaksengajaan pada tahun 2015 salah satu perusahaan Beton Pracetak terbaik di indonesia membutuhkan karyawan untuk mengerjakan utilitas pabriknya dan kemudian kami dipercaya untuk yang memproduksi produk mereka. Pada, Tahun 2019 bulan September merupakan awal dari kemajuan perusahaan kami dan mulai mengawali surat perjanjian kerjasama dengan perusahaan PT Wika Kobe. Berbagai Produk telah kami kerjakan seperti Produk Hollow Girder, Full Slab dan Half Slab, Linning, dan proyek yang kami akan kerjakan yaitu Mega Proyek Tunnel Segment MRT Jakarta Phase II yang akan mulai produksi massal pada bulan Februari Tahun 2021.</p>
                        
                        
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
                        CV. Beton Emas Persada adalah Perusahaan mitra terpercaya dalam indsutri penyedia jasa beton pracetak dan konstruksi.
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
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">&nbsp Menempatkan kepuasan klien sebgai komitmen utama.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">&nbsp Menempatkan mitra kerja sebagai bagian integral dari tim kerja.</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">&nbspMemiliki sumber daya manusia yang profesional, berintegritas tinggi serta berorientasi kepada peningkatan secara terus-menerus.</div>
                            </li>
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
                        <a class="button is-checked" data-filter="*"><span>SHOW ALL</span></a>
                        <a class="button" data-filter=".design"><span>DESIGN</span></a>
                        <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                        <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a>
                    </div> <!-- end of button group -->
                    <div class="grid">
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span>Online Banking</span></div><img src="{{ asset('frontend/images/project-1.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span>Classic Industry</span></div><img src="{{ asset('frontend/images/project-2.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span>BoomBap Audio</span></div><img src="{{ asset('frontend/images/project-3.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span>Van Moose</span></div><img src="{{ asset('frontend/images/project-4.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span>Joy Moments</span></div><img src="{{ asset('frontend/images/project-5.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span>Spark Events</span></div><img src="{{ asset('frontend/images/project-6.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span>Casual Wear</span></div><img src="{{ asset('frontend/images/project-7.jpg') }}" alt="alternative"></a>
                        </div>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span>Zazoo Apps</span></div><img src="{{ asset('frontend/images/project-8.jpg') }}" alt="alternative"></a>
                        </div>
                    </div> <!-- end of grid -->
                    <!-- end of filter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
		</div> <!-- end of container -->
    </div> <!-- end of filter -->
    <!-- end of projects -->

@endsection