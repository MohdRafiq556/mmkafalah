@extends('layouts.landpage2')

@section('content')

<!-- Image Showcases-->

<section class="showcase ">

            <div class="container-fluid p-0 ">
            <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                    <h1>TENTANG KAMI!</h1>
                </div>
            &nbsp;
                <hr>
                <div class="row g-0 bg-secondary">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('landingpage2/assets/img/img-1.jpg')}}')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto  showcase-text">
                        <h2>Perancangan Harta Pusaka</h2>
                        <p class="lead mb-0">Merancang harta dalam Islam bukan sahaja terhad pada kaedah dan tatacara menguruskan perbelanjaan individu atau keluarga bagi kepentingan hidup di dunia sahaja</p>
                    </div>
                </div>
                <div class="row g-0 bg-secondary">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('landingpage2/assets/img/img-2.jpg')}}')"></div>
                    <div class="col-lg-6 my-auto  showcase-text">
                        <h2>Sambungan</h2>
                        <p class="lead mb-0">Merancang harta juga merangkumi bagaimana cara seseorang menguruskan harta dengan cara membuat perancangan yang teratur untuk kesejahteraan hidup di dunia dan di akhirat</p>
                    </div>
                </div>
                <div class="row g-0 bg-secondary">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('landingpage2/assets/img/img-3.jpg')}}')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto  showcase-text">
                        <h2>Dari Abi Bazrah Al-Asmi Berkata</h2>
                        <p class="lead mb-0">Baginda Rasulullah SAW bersabda, tidak akan melangkah kaki anak Adam pada hari kiamat sehingga ditanyakan tentang umurnya pada apa ia habiskan, tentang ilmunya pada apa ia lakukan, tentang hartanya dari mana ianya diperolehi dan ke mana ianya dibelanjakan dan tentang tubuhnya pada apa ianya dihabiskan. (HR Imam Tirmizi)</p>
                    </div>
                </div>
            </div>
        </section>

@endsection
