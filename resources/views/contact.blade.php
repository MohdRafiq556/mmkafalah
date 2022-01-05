@extends('layouts.landpage2')

@section('content')

<!-- Icons Grid-->
<h2>Cawangan Johor</h2>
<h2>Cawangan Melaka</h2>
<section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('landingpage2/assets/img/contact_img-1.jpg')}}')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Fully Responsive Design</h2>
                        <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('landingpage2/assets/img/contact_img-2.jpg')}}')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Updated For Bootstrap 5</h2>
                        <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 5 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 5!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-icons text-center">
            
            <div class="container">
                
                <div class="row">

                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-geo-alt m-auto text-primary"></i></div>
                            <h3>Lokasi</h3>
                            <p class="lead mb-0">No 24 Tingkat Atas, Jalan Genuang Perdana, Taman Genuang Perdana 85000 Segamat, Johor</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-clock m-auto text-primary"></i></div>
                            <h3>Waktu Operasi</h3>
                            <p class="lead mb-0">9:00 AM – 5.00 PM <br>Ahad – Khamis</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-telephone m-auto text-primary"></i></div>
                            <h3>Hubungi Kami</h3>
                            <p class="lead mb-0">Tel : 019-415 1337 <br> Email: mmkafalah@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h2>Cawangan Melaka</h2>
        <section class="features-icons text-center">
            
            <div class="container">
                
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-geo-alt m-auto text-primary"></i></div>
                            <h3>Lokasi</h3>
                            <p class="lead mb-0">No 25 -1, Jalan Seri 7, Taman Cheng Baru, 75250 Cheng, Melaka</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-clock m-auto text-primary"></i></div>
                            <h3>Waktu Operasi</h3>
                            <p class="lead mb-0">9:00 AM – 5.00 PM <br>Isnin – Jumaat</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi bi-telephone m-auto text-primary"></i></div>
                            <h3>Hubungi Kami</h3>
                            <p class="lead mb-0">Tel : 011-1087 8990/010-542 5467 <br> Emel:mmkafalahmlk@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
