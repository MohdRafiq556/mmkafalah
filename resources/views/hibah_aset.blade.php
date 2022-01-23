@extends('layouts.landpage2')

@section('content')

<!-- Image Showcases-->
<section class="showcase">
            <div class="container-fluid p-0">
            <div class=" text-white mb-4" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1>HIBAH ASET</h1>
                <h2>Rancang Harta, Waris Terpelihara</h2>
            </div>
            
            &nbsp;
                <div class="justify-content-start">
                    <p class="lead mb-0 fs-4 text-start"><strong>Hibah Aset</strong> berbeza dengan <strong>Hibah Takaful</strong>. Perbezaan kedua-dua hibah tersebut adalah harta yang hibahkan didalam akadnya. Bagi <strong> Hibah Takaful </strong>,
                    harta yang dihibahkan hanyalah polisi dari <strong>manfaat</strong> yang dicarum. Manakala, <strong>Hibah Aset</strong> pula menggunakan <strong>harta</strong> seperti rumah, kereta, tanah dan sebagainya.</p>
                    <div style="padding:15px 0px;"></div>
                    
                    <h3 class="features-icons-icon d-flex text-start">DEFINISI HIBAH</h3>
                    <p class="lead mb-0 fs-4 text-start">Secara umumnya, <strong>hibah</strong> adalah <strong>suatu akad</strong> yang mengandungi <strong>pemberian</strong> milik oleh seseorang secara <strong>sukarela</strong> terhadap hartanya kepada seseorang yang lain pada masa hidupnya tanpa balasan.
                        Dalam erti kata yang mudah bagi hibah ialah “<strong>hadiah</strong>”.</p>
                </div>

                &nbsp;

                <div class="bg-white text-dark text-center " style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">PERBEZAAN WASIAT & HIBAH</h4>
                </div>

                <div class="p-4">
                    <img class="img-fluid" style="width:100%;height:670px;" src="{{asset('landingpage2/assets/img/hibah-aset_1.png')}}" alt="">
                </div>
                
                <div class="p-2 justify-content-start">
                    <p class="lead mb-0 fs-4 text-start"><strong>MM Kafalah Agency</strong> menyediakan perkhidmatan <strong>hibah aset</strong> yang merupakan langkah <strong>TERBAIK</strong> bagi memastikan <strong>harta menjadi milik insan tersayang</strong>. “<strong>HADIAH</strong>” dapat membuatkan segala harta yang telah dihibahkan <strong>terjamin daripada sebarang konflik dan masalah</strong> dalam kalangan waris pada masa akan datang.</p>
                </div>

                <div class="bg-white text-dark">
                    <hr><h3>JENIS-JENIS HIBAH</h3><hr>
                    <div class="col">
                        <img class="img-fluid" style="width:100%;height:330px;" src="{{asset('landingpage2/assets/img/hibah-aset_5.png')}}" alt="">
                    </div>
                </div>
                &nbsp;

                <div class="bg-white text-dark text-center " style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">KEPENTINGAN HIBAH ASET</h4>
                </div>

                <div class="p-4 text-center">
                    <img class="img-fluid" style="width:640px;height:770px;" src="{{asset('landingpage2/assets/img/hibah-aset_2.png')}}" alt="">
                </div>
                
                <hr style="border:2px solid white;">

                <div class="text-center">
                    <a class="text-white btn btn-danger" href="https://api.whatsapp.com/send?phone=601110899055&text=SAYA%20NAK%20TAHU%20TENTANG%20HIBAH" target="_blank">Ketahui Lebih Lanjut</a>
                </div>

                <hr style="border:2px solid white;">&nbsp;
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <img class="p-4" style="width:100%;height:500px;" src="{{asset('landingpage2/assets/img/hibah-aset_3.png')}}" alt="">
                        </div>
                        <div class="col-lg-6">
                            <img class="p-4" style="width:100%;height:500px;" src="{{asset('landingpage2/assets/img/hibah-aset_4.png')}}" alt="">
                        </div>
                    </div>
                </div>
        </section>

@endsection