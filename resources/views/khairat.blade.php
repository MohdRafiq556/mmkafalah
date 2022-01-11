@extends('layouts.landpage2')

@section('content')

<div class="container justify-content-center">
    <div class="row text-center" >
        <div class="col">
            <a href="#khairat-khas" style="padding:10px 85px;" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle"> KHAIRAT KHAS</i></a>
        </div>
        <div class="col">
            <a href="#kain-kafan" style="padding:10px 85px;" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle"> SET LENGKAP KAIN KAFAN</i></a>
        </div>
        <div class="col">
            <a href="#badal-haji" style="padding:10px 85px;" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle"> BADAL HAJI</i></a>
        </div>
    </div>
</div>

<section class="features-icons text-center" id="khairat-khas">
    <div class="container">
        <div class="row ">
            <div class="justify-content-center">
                <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                    <h1 >KHAIRAT KHAS KIFAYAHKU</h1>
                    <h2>Solusi Pusakaku</h2>
                    <a href="#pilihan" style="" class="navbar-brand btn btn-light"><i class="bi bi-arrow-down-circle">Lihat Pilihan</i></a>
                </div>
                
                <img class="img-fluid" style="width:420px;height:520px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-1.png')}}" alt="">

                <p class="lead mb-0">Apabila seseorang Islam meninggal dunia, maka perkara-perkara yang wajib dilaksanakan dengan segera adalah seperti berikutnya : </p>

                <img class="img-fluid" style="width:630px;height:520px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-2.png')}}" alt="">

                <p>Menjadi tuntutan (Fardhu Kifayah) ke atas orang Islam yang masih hidup untuk melaksanakan urusan tersebut dengan sebaik-baiknya.</p>

                <h3>DEFINISI KHAIRAT KEMATIAN</h3>

                <p>Khairat kematian bermaksud wang yang dikumpulkan oleh pencarum di sesebuah kawasan yang akan diberikan kepada waris untuk menguruskan kematian. Pengumpulan dana khairat kematian secara beramai-ramai bertujuan untuk membantu waris mempercepatkan urusan pengebumian jenazah. Dalam situasi ini, kegunaan wang yang dicarum adalah sebagai persediaan barang pengebumian jenazah. Khairat kematian terbukti membantu memudahkan pengurusan jenazah dan meringankan beban waris.</p>

                <img class="img-fluid" style="width:630px;height:520px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-3.png')}}" alt="">

                <h3>MANFAAT PERCUMA KHAIRAT KHAS DI MM KAFALAH</h3>
            </div>

            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                    <i class="bi bi-briefcase-fill m-auto text-secondary"></i>
                    </div>
                    <div class="col-lg-6">text</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                    <i class="bi bi-briefcase-fill m-auto text-secondary"></i>
                    </div>
                    <div>text</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                    <i class="bi bi-briefcase-fill m-auto text-secondary"></i>
                    </div>
                    <div>text</div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="bi bi-briefcase-fill m-auto text-secondary"></i>
                    </div>
                    <div >text</div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features-icons text-center" id="kain-kafan">
    <div class="container">
        <div class="row">
            <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1 >SET LENGKAP KAIN KAFAN</h1>
                
            </div>
        </div>
    </div>
</section>

<section class="features-icons text-center" id="badal-haji">
    <div class="container">
        <div class="row">
            <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1 >BADAL HAJI</h1>
                
            </div>
        </div>
    </div>
</section>

@endsection