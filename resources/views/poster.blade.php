@extends('layouts.landpage2')

@section('content')

<!-- Image Showcases-->

<section class="showcase ">
    <div class="container">
        <div class="row justify-content-start">
            <div class=" text-white " style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1>POSTER</h1>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-1.jpeg')}}" alt="">
                <p class="lead mb-0 p-2">Darah Daging Menjadi Musuh</p>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-2.jpeg')}}" alt="">
                <p class="lead mb-0 p-2">Kwsp Hak Siapa???</p>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-3.jpeg')}}" alt="">
                <p class="lead mb-0 p-2">Disebabkan Harta Terputus Silaturahim</p>
            </div>

            <div class="w-100 d-none d-md-block"></div>

            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-4.jpeg')}}" alt="">
                <p class="lead mb-0 p-2">Katakan Tidak Pada Harta Batil</p>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-5.jpg')}}" alt="">
                <p class="lead mb-0 p-2">Jangan Pernah Berniat Tidak Membayar Hutang</p>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:300px;height:400px;" src="{{asset('landingpage2/assets/img/poster-6.jpg')}}" alt="">
                <p class="lead mb-0 p-2">Waris Derita Kerana Hutang Si Mati</p>
            </div>
        </div>
    </div>
</section>

<section class="showcase ">
    <div class="container">
        <div class="row justify-content-start">
            <div class=" text-white " style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1>AKTIVITI</h1>
            </div>
            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Program CSR MMKafalah Agency.</h4>
            </div>
            <div class="col-4 p-5">

            </div>

            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Program MM Kafalah Agency.</h4>
            </div>
            <div class="col-4 p-5">
                
            </div>

            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Perkongsian Skim Khairat Kematian Dan Pengurusan Pusaka.</h4>
            </div>
            <div class="col-4 p-5">
                
            </div>

            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Program Khidmat Rundingan.</h4>
            </div>
            <div class="col-4 p-5">
                <img class="img-fluid" style="width:340px;height:480px;" src="{{asset('landingpage2/assets/img/aktiviti-1.jpg')}}" alt="">
            </div>

            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Perjumpaan Bersama Waris.</h4>
            </div>
            <div class="col-4 p-5">
                
            </div>

            <div class="p-3"></div>
            <div class="bg-white text-dark text-center p-2 border border-4 border-info">
                <h4 style="padding:10px 0;">Program Pengurusan Jenazah.</h4>
            </div>
            <div class="col-4 p-5">
                
            </div>

        </div>
    </div>
</section>

@endsection
