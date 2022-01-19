@extends('layouts.landpage2')

@section('content')

<!-- Image Showcases-->

<section class="showcase">
    <div class="conatainer">
        <div class="row">
            <div class=" text-white" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-1.jpg')}}');background-size:100%;padding:40px 0px;">
                <h1>HARTANAH</h1>
            </div>
            <div class="justify-content-center">
                <p class="lead mb-0 text-start fs-4" style="padding:15px 0;">Hartanah adalah keperluan asasi manusia dan menjaga harta merupakan salah satu maslahat dalam maqasid syariah. Pemilikan harta yang jelas perlulah dititikberatkan oleh setiap individu bagi memastikan harta tersebut dimiliki secara sah.</p>

                <div style="padding:15px 0;">
                    <img class="img-fluid" style="width:520px;height:560px;" src="{{asset('landingpage2/assets/img/hartanah-1.png')}}" alt="">
                </div>

                <p class="lead mb-0 text-start fs-4" style="padding:15px 0;">Terdapat beberapa khidmat yang disediakan oleh MM Kafalah Agency berkenaan hartanah iaitu pecah lot/pecah geran tanah, juru ukur dan wakaf aset.</p>

                <div class="bg-white text-dark text-start" style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">1. PECAH LOT/ PECAH GERAN TANAH</h4>
                </div>
                <div class="text-start ">
                    <p class="lead mb-0 text-start fs-5 p-1" >Pecah lot bermaksud memecahkan satu (1) lot tanah yang dipegang oleh dua (2) orang atau lebih tuan tanah bersama mengikut hak masing–masing dengan hakmilik berasingan.</p>
                    <p class="lead mb-0 text-start fs-5 p-1" > Isu “kongsi geran tanah” adalah masalah yang sering berlaku dalam masyarakat. Isu ini lebih kritikal sekiranya melibatkan orang yang tidak dikenali (bukan waris dan yang telah meninggal dunia. </p>
                    <p class="lead mb-0 text-start fs-5 p-1" >MM Kafalah Agency juga menyediakan perkhidmatan, pecah lot/ pecah geran tanah bagi mengelakkan sebarang konflik antara waris.</p>
                </div>
            
                <div class="bg-white text-dark text-start" style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">2. KHIDMAT JURU UKUR</h4>
                </div>
                <div class="text-start">
                    <p class="lead mb-0 fs-5 p-2" >Sekiranya seseorang ingin membuat proses pecah lot, mengesahkan sempadan, menjual atau membeli tanah dan sebagainya. Khidmat ini diperlukan untuk mengelakkan kekeliruan atau masalah undang-undang sekiranya waris bertelingkah dikemudian hari. Oleh itu, MM Kafalah Agency menyediakan perkhidmatan juru ukur melibatkan pemilikan tanah.</p>
                </div>

                <div class="bg-white text-dark text-start" style="padding:5px 15px;">
                    <h4 style="padding:10px 0;">3. WAKAF ASET</h4>
                </div>
                <div class="text-start">
                    <p class="lead mb-0 text-start fs-5 p-2" style="padding:10px 0 25px 5px;">Khidmat Wakaf aset memainkan peranan yang penting untuk menyumbang kepada kemakmuran dan kesejahteraan sosioekonomi ummah. Harta yang diwakaf akan diagihkan manfaatnya kepada penerima wakaf dalam merealisasikan hasrat pewakaf yang ingin mendapatkan ganjaran pahala yang berterusan daripada Allah SWT. Lantaran itu, pihak MM Kafalah Agency turut menjadi pemegang amanah kepada para pewakaf yang ingin menyumbangkan harta kepada yang layak. Pihak MM Kafalah Agency dengan kerjasama NGO atau pihak luar akan mewakafkan mengikut hasrat pewakaf atau ditempat yang berkepentingan mengikut syarak.</p>
                </div>

                <div style="padding:25px 0;">
                    <img class="img-fluid" style="width:640px;height:480px;" src="{{asset('landingpage2/assets/img/hartanah-2.png')}}" alt="">
                </div>

                <div class="text-center">
                    <p class="text-center fs-4 p-1">Ingin mendapatkan perkhidmatan konsultasi PERCUMA daripada kami ?</p>
                    <p class="text-center fs-4 p-1">Hubungi kami melalui link di bawah :</p>
                </div>
                
                <div style="padding:15px 0;">
                    <a class="text-white btn btn-danger" href="https://api.whatsapp.com/send?phone=601110899055&text=SAYA%20NAK%20URUS%20HARTANAH" target="_blank">Hubungi Kami <i class="bi bi-chevron-double-right"></i></a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection
