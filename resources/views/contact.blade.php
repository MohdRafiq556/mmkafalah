@extends('layouts.landpage2')

@section('content')

<!-- Icons Grid-->
<div style="padding:10px 0px;">
    <a href="#johor" style="" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle"> Cawangan Johor</i></a>
    <a href="#melaka" style="" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle"> Cawangan Melaka</i></a>
</div>       
<hr>
    <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
        <h1 id="johor">CAWANGAN JOHOR</h1>
    </div>
        <section class="features-icons text-center">
            
            <div class="container">
                <div class="order-lg-2"><img style="width:650px;height:350px;" src="{{asset('landingpage2/assets/img/contact_img-1.jpg')}}" alt="Pejabat Cawangan Johor"></div>
                
                <div class="row g-0">

                    <div class="col-lg-4">
                    
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            
                            <div class="features-icons-icon d-flex"><i class="bi bi-geo-alt m-auto text-primary"></i></div>
                            <h4>Lokasi</h4>
                            <p class="lead mb-0">No 24 Tingkat Atas, Jalan Genuang Perdana, Taman Genuang Perdana 85000 Segamat, Johor</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-clock m-auto text-primary"></i></div>
                            <h4>Waktu Operasi</h4>
                            <p class="lead mb-0">9:00 AM – 5.00 PM <br>Ahad – Khamis</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-telephone m-auto text-primary"></i></div>
                            <h4>Hubungi Kami</h4>
                            <p class="lead mb-0">Tel : 019-415 1337 <br> Email: mmkafalah@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>

    <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
        <h1 id="melaka">CAWANGAN MELAKA</h1>
    </div>
        <section class="features-icons text-center">
            
            <div class="container">
            <div class="order-lg-2"><img style="width:650px;height:350px;" src="{{asset('landingpage2/assets/img/contact_img-3.jpg')}}" alt="Pejabat Cawangan Melaka"></div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-geo-alt m-auto text-primary"></i></div>
                            <h4>Lokasi</h4>
                            <p class="lead mb-0">No 25 -1, Jalan Seri 7, Taman Cheng Baru, 75250 Cheng, Melaka</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-clock m-auto text-primary"></i></div>
                            <h4>Waktu Operasi</h4>
                            <p class="lead mb-0">9:00 AM – 5.00 PM <br>Isnin – Jumaat</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-telephone m-auto text-primary"></i></div>
                            <h4>Hubungi Kami</h4>
                            <p class="lead mb-0">Tel : 011-1087 8990/010-542 5467 <br> Emel:mmkafalahmlk@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
