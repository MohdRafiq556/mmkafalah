@extends('layouts.landpage2')

@section('content')

<!-- Image Showcases-->
<section class="showcase">
            <div class="container-fluid p-0">
                <div class=" text-white mb-4" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                    <h1>HARTA PUSAKA</h1>
                </div>

            <div class="p-3 text-start">
                <h3 class="features-icons-icon d-flex mb-2">DEFINISI HARTA PUSAKA</h3>
                <p class="lead mb-0 fs-5"><strong>Harta pusaka</strong> adalah segala apa yang menjadi <strong>kepunyaan si mati</strong> di masa hidupnya. Selain itu, ia juga<strong> ditinggalkan untuk waris-warisnya </strong>
                sama ada <strong>harta benda atau hak-hak</strong> dan apa yang termasuk dalam <strong>miliknya</strong> setelah dia mati.</p>
            
                
            </div> 
                
            <div class="p-3 text-start">
            <h3 class="features-icons-icon d-flex mb-2">ASET TERBEKU</h3>
                <p class="lead mb-0 fs-5">Sejak akhir-akhir ini, Malaysia berdepan dengan<strong> masalah yang kritikal</strong> dalam <strong>kalangan masyarakat Islam</strong> kita <strong>iaitu aset terbeku yang semakin meningkat.</strong> 
                    Berdasarkan sumber Utusan Malaysia pada tahun 2021 hampir <strong>90 billion harta umat Islam telah terbeku akibat tidak dituntut.</strong> 
                    Perkara ini berlaku kerana <strong>sikap sesetengah waris yang tidak endah</strong> dan juga sikap yang <strong>tidak bertanggungjawab,</strong> 
                    hal ini terjadi kerana mereka beranggapan bahawa pengurusan harta rumit untuk diselesaikan, maka mereka melengah-lengahkan untuk menguruskan harta tersebut. 
                    Dengan ini, ia akan <strong>merugikan waris</strong> untuk menuntut hak masing-masing kerana ia <strong>memerlukan proses yang lama ( >6 bulan )</strong> dan <strong>kos pentadbiran juga semakin tinggi</strong> dalam menuntut pembahagian harta tersebut.</p>
            </div>

            <div class="bg-white text-dark text-center " style="padding:5px 15px;">
                <h4 style="padding:10px 0;">MASALAH YANG SERING DI HADAPI OLEH WARIS</h4>
            </div>

            &nbsp;
            <div class="text-center p-1">
                <img class="img-fluid" style="width:820px;height:470px;padding:15px 0px;" src="{{asset('landingpage2/assets/img/urus-pusaka_1.png')}}" alt="">
            </div>
                
            <div class="text-center p-1">
                <img class="img-fluid" style="width:820px;height:470px;padding:15px 0px;" src="{{asset('landingpage2/assets/img/urus-pusaka_2.jpg')}}" alt="">
            </div> 
                
                &nbsp;

                <div class="container p-1">
                    <hr style="border:2px solid white;">
                    <h3 class="">Apakah SOLUSI anda untuk mengelakkan masalah pengurusan harta pusaka dikemudian hari???</h3>
                    <div class="text-center">
                        <a class="text-white btn btn-danger" href="{{url ('/khairat ')}}">Tekan Untuk Ketahui Lebih Lanjut</a>
                    </div>
                </div>

                <div class="p-3"></div>

                <div class="container bg-light text-dark ">
                <h3 class="features-icons-icon text-center p-4">KEPENTINGAN PUSAKA</h3>
                    <div class="row">
                        <div class="col p-4">
                            <img  style="width:530px;height:430px;" src="{{asset('landingpage2/assets/img/urus-pusaka_3.png')}}" alt="">
                            <p class="lead mb-0 fs-5"><strong class="fw-bold">Hutang si mati</strong> dapat di jelaskan dengan segera</p>
                        </div>
                        <div class="col p-4">
                            <img  style="width:530px;height:430px;" src="{{asset('landingpage2/assets/img/urus-pusaka_4.png')}}" alt="">
                            <p class="lead mb-0 fs-5">Mengelak waris <strong class="fw-bold">memakan harta batil</strong></p>
                        </div>
                    </div>
                </div>
               
                <div class="container bg-light text-dark">
                    <div class="row">
                        <div class="col p-4">
                            <img  style="width:530px;height:430px;" src="{{asset('landingpage2/assets/img/urus-pusaka_5.png')}}" alt="">
                            <p class="lead mb-0 fs-5"><strong class="fw-bold">Menjamin kebajikan waris</strong> yang ditinggalkan</p>
                        </div>
                        <div class="col p-4">
                            <img  style="width:530px;height:430px;" src="{{asset('landingpage2/assets/img/urus-pusaka_6.png')}}" alt="">
                            <p  class="lead mb-0 fs-5 ">Dapat<strong class="fw-bold"> mengelakkan</strong> waris daripada <strong class="fw-bold">putus silaturrahim</strong></p>
                        </div>
                    </div>
                </div>

                &nbsp;

                <div class="container " style="padding:25px 0px;">
                    <div class="row ">
                        <div class="col border border-light rounded border-3" style="padding:10px 0px;">
                            <h6 class="bg-dark p-3 fs-4">TERMASUK HARTA PUSAKA</h6>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Sewa</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Hutang</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Dividen / Faedah</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">KWSP</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Penama Takaful</li>
                        </div>
                        <div class="col border border-light rounded border-3" style="padding:10px 0px;">
                            <h6 class="bg-dark p-3 fs-4">BUKAN HARTA PUSAKA</h6>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Harta Yang Dijual / Diwakaf / Diberi</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Khairat Kematian</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Pemberian Sedekah</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">Pencen</li>
                            <li class="text-start fs-5" style="padding:0 0 0 15px;">PERKESO</li>
                        </div>
                    </div>
                </div>
                &nbsp;

                <!-- Image Showcases-->
                <div class="bg-white text-dark text-center " style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">PEMBAHAGIAN PUSAKA</h4>
                </div>

                <div class="p-3"></div>

        <section class="showcase ">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2"><img src="{{asset('landingpage2/assets/img/urus-pusaka_9.jpg')}}" style="width:650px;height:352px;" alt=""></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text bg-secondary">
                        <h4 class="fs-4">RUKUN PUSAKA</h4>
                            <li class="fs-5 text-center">Si Mati</li>
                            <li class="fs-5 text-center">Waris</li>
                            <li class="fs-5 text-center">Harta</li>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6"><img src="{{asset('landingpage2/assets/img/urus-pusaka_10.jpg')}}" style="width:650px;height:352px;" alt=""></div>
                    <div class="col-lg-6 my-auto showcase-text bg-secondary">
                        <h4 class="fs-4">SEBAB MEMPUSAKAI HARTA</h4>
                            <li class="fs-5 text-center">Perkahwinan</li>
                            <li class="fs-5 text-center">Keturunan</li>
                            <li class="fs-5 text-center">Islam</li>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white"><img src="{{asset('landingpage2/assets/img/urus-pusaka_11.jpg')}}" style="width:650px;height:352px;" alt=""></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text bg-secondary">
                        <h4 class="fs-4">TIDAK LAYAK TERIMA PUSAKA</h4>
                            <li class="fs-5 text-center">Membunuh</li>
                            <li class="fs-5 text-center">Murtad</li>
                            <li class="fs-5 text-center">Berlainan Agama</li>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white"><img src="{{asset('landingpage2/assets/img/urus-pusaka_12.jpg')}}" style="width:650px;height:320px;" alt=""></div>
                    <div class="col-lg-6 my-auto showcase-text bg-secondary">
                        <h4 class="fs-4">SYARAT TERIMA PUSAKA</h4>
                            <li class="fs-5 text-center">Harta Milik Si Mati</li>
                            <li class="fs-5 text-center">Waris Masih Hidup</li>
                            
                    </div>
                </div>
            </div>
        </section>

        <div class="p-3"></div>
        <div class="container-fluid bg-white text-dark p-4">
            <h3>WARIS - WARIS DALAM PEMBAHAGIAN HARTA</h3>

            <img class="img-fluid p-3" style="width:820px;height:470px;" src="{{asset('landingpage2/assets/img/urus-pusaka_7.png')}}" alt="">
            
            <img class="img-fluid p-3" style="width:820px;height:470px;" src="{{asset('landingpage2/assets/img/urus-pusaka_8.png')}}" alt="">
        </div>

            
        
            


        </section>

@endsection