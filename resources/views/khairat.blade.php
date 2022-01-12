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

                <hr><h3>DEFINISI KHAIRAT KEMATIAN</h3><hr>

                <p>Khairat kematian bermaksud wang yang dikumpulkan oleh pencarum di sesebuah kawasan yang akan diberikan kepada waris untuk menguruskan kematian. Pengumpulan dana khairat kematian secara beramai-ramai bertujuan untuk membantu waris mempercepatkan urusan pengebumian jenazah. Dalam situasi ini, kegunaan wang yang dicarum adalah sebagai persediaan barang pengebumian jenazah. Khairat kematian terbukti membantu memudahkan pengurusan jenazah dan meringankan beban waris.</p>

                <img class="img-fluid" style="width:630px;height:520px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-3.png')}}" alt="">

            </div>

                <hr><h3 style="padding:25px 0;">MANFAAT PERCUMA KHAIRAT KHAS DI MM KAFALAH</h3><hr>

                <div class="col-lg-6">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                        <i class="bi bi-file-earmark-text-fill m-auto text-light"></i>
                        </div>
                        <div >
                            <h4>PENGURUSAN JENAZAH</h4>
                            <p class="lead mb-0">Kesemua proses pengurusan jenazah akan dibantu tidak kira dimana sahaja.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                        <i class="bi bi-check2-square m-auto text-light"></i>
                        </div>
                        <div >
                            <h4>KHIDMAT BADAL HAJI</h4>
                            <p class="lead mb-0">Badal Haji akan dilakukan sekiranya si mati tidak sempat melaksanakan ibadah haji semasa hidup. Sebagai bukti, waris akan diberikan sijil badal haji.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                        <i class="bi bi-house-door-fill m-auto text-light"></i>
                        </div>
                        <div>
                            <h4>PENGURUSAN PUSAKA</h4>
                            <p class="lead mb-0">Pengurusan pusaka akan diuruskan oleh syarikat dengan segera tanpa membebankan waris.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                        <div class="features-icons-icon d-flex">
                            <i class="bi bi-file-earmark-check m-auto text-light"></i>
                        </div>
                        <div>
                            <h4>DOKUMEN WASIAT</h4>
                            <p class="lead mb-0">Pencarum layak membuat dokumen wasiat tanpa dikenakan caj untuk memelihara hak keluarga.</p>
                        </div>
                    </div>
                </div>
&nbsp;
                <hr><h3 style="padding:15px 0;">PILIHAN KHAIRAT</h3><hr>

                <div class="col-lg-6 ">
                    <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-4.png')}}" alt="">
                    <a class="text-white btn btn-danger" href="https://api.whatsapp.com/send?phone=601110899055&text=SAYA%20NAK%20TAHU%20TENTANG%20HIBAH" target="_blank">Pilih Khairat Standard</a>
                </div>

                <div class="col-lg-6 ">
                    <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/khairat-khas-5.png')}}" alt="">
                    <a class="text-white btn btn-danger" href="https://api.whatsapp.com/send?phone=601110899055&text=SAYA%20NAK%20TAHU%20TENTANG%20HIBAH" target="_blank">Pilih Khairat Warga Emas</a>
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
            <div class="justify-content-center">
                <img class="img-fluid" style="width:360px;height:400px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-1.png')}}" alt="">

                <p class="lead mb-0">Set lengkap kain kafan merupakan salah satu produk atau perkhidmatan daripada MM Kafalah Agency. Apabila berlakunya kematian, proses pertama yang perlu disegerakan adalah menguruskan jenazah. </p>

                <img class="img-fluid" style="width:630px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-2.png')}}" alt="">
                <br>

                <div style="padding:25px 0;"><a class="text-white btn btn-danger"  href="https://api.whatsapp.com/send?phone=601110899055&text=SAYA%20NAK%20TAHU%20TENTANG%20HIBAH" target="_blank">Saya Ingin Tahu Tentang Set MYKIFAYAH</a></div>

                <p class="lead mb-0">Seterusnya adalah urusan pengebumian dan urusan pembahagian harta pusaka si mati. Maka, pengurusan jenazah adalah sangat penting dan perlu dititikberatkan.</p>
            </div>
            &nbsp;

            <div class="justify-content-center">
                <div class="bg-white text-dark text-center" style="padding:20px 0;">
                    <h4>PROGRAM "1 RUMAH 1 SET MYKIFAYAH"</h4>
                </div>

                <p class="lead mb-0 fs-5 d-flex" style="padding:10px 10px;">Sebab Perlu Sekurang-Kuranya Satu Set Keperluan</p>

                <div class="text-dark" style="background-image: url('{{asset('landingpage2/assets/img/bg-img-3.jpg')}}');background-size:100%;padding:15px 25px;">
                    <ol class="list-group list-group-numbered">
                        <li class="d-flex">Dapat menginsafi diri dengan mengingati kematian apabila mempunyai set MyKifayah.</li>
                        <li class="d-flex">Dapat membuat persediaan awal sebelum perkara yang tidak diingini berlaku.</li>
                        <li class="d-flex">Waris dapat menguruskan sendiri mandi dan kafan jenazah dengan berpandukan nota panduan yang telah disediakan. </li>
                        <li class="d-flex">Dapat membantu dan memudahkan masyarakat sekeliling sekiranya berlaku kematian yang tidak dijangka.</li>
                        <li class="d-flex">Dapat melakukan amal jariah dengan berwakaf dan bersedekah kepada individu mahupun institusi.</li>
                    </ol>
                </div>
<hr>
                <img class="img-fluid" style="width:560px;height:530px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-3.png')}}" alt="">
                
                <hr>

                <p class="lead mb-0">Terdapat dua pilihan set MyKifayah iaitu set ekonomi dan set premium. Berikut adalah senarai barangan dan harga kedua-dua set.</p>
                
                <img class="img-fluid" style="width:760px;height:640px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-4.jpg')}}" alt="">
                
                <div class="bg-white text-dark text-center" style="padding:20px 0;">
                    <h4>SET MYKIFAYAH</h4>
                </div>

                <div class="embed-responsive embed-responsive-16by9" style="padding:20px 0;">
                    <iframe class="embed-responsive-item" style="width:660px;height:390px;" src="{{asset('landingpage2/assets/img/kain-kafan-5.mp4')}}" allowfullscreen></iframe>
                </div>

                <div class="bg-white text-dark text-center" style="padding:20px 0;">
                    <h4>PROGRAM WAKAF SET MY KIFAYAH</h4>
                </div>  

                <p class="lead mb-0" style="padding:20px 0;">MM Kafalah Agency juga menyediakan perkhidmatan wakaf set mykifayah. Set ini boleh disumbangkan kepada individu, masjid dan hospital yang terpilih. Inisiatif ini bagi membantu golongan yang memerlukan dan menjamin kebajikan sesama Islam. Secara tidak langsung, dapat memberi peluang kepada masyarakat untuk berkongsi rezeki serta manfaat bersama.</p>
                
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img class="img-fluid" style="width:580px;height:530px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-6.png')}}" alt="">
                        </div>

                        <div class="col-lg-6 ">
                            <img class="img-fluid" style="width:580px;height:530px;padding:25px 0;" src="{{asset('landingpage2/assets/img/kain-kafan-7.png')}}" alt="">                  
                        </div>
                    </div>
                </div>
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
            <div class="justify-content-center">
                <h4>DEFINISI BADAL HAJI</h4>

                <p>Badal Haji / Upah haji bermaksud mewakilkan kepada waris atau orang lain bagi melaksanakan ibadat haji ke atas dirinya disebabkan uzur seperti sakit yang tiada harapan sembuh atau terlalu tua atau meninggal dunia sedangkan ia berkemampuan tetapi tidak sempat menunaikan ibadat tersebut ketika masih hidup.</p>

                <p>MM Kafalah Agency menyediakan perkhidmatan Badal Haji yang merupakan rukun Islam kelima. Ia juga boleh disempurnakan dan dilaksanakan untuk orang tersayang sebelum harta pusaka dibahagikan bagi menambahkan lagi amalan seseorang didunia dan akhirat. </p>

                <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/badal-haji-1.png')}}" alt="">

            </div>
            <div class="col-lg-6 ">
                    <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/badal-haji-2.png')}}" alt="">
                </div>

                <div class="col-lg-6 ">
                    <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/badal-haji-3.png')}}" alt="">                  
                </div>

            <div class="justify-content-center">
                <p>Mereka yang berkemampuan secara langsung adalah DIWAJIBKAN haji baginya manakala, bagi mereka yang berkemampuan secara tidak langsung adalah DIHARUSKAN untuk melakukan upah haji.</p>
                <hr>
                <img class="img-fluid" style="width:600px;height:570px;padding:25px 0;" src="{{asset('landingpage2/assets/img/badal-haji-4.png')}}" alt="">                  
            </div>

            <h4>PERSOALAN UPAH/BADAL HAJI</h4>
            <h5>Apakah Hukum Melaksanakan Upah Haji?</h5>
            <p>Hukum melaksanakannya adalah harus. Rasulullah menyamakan Haji sebagai hutang dengan Allah SWT. Jadi, sebagai waris sebaiknya kita bantu arwah untuk melangsaikan hutang tersebut.</p>

            <h5>Adakah Waris Boleh Melaksanakan Haji Untuk Arwah?</h5>
            <p>Lebih afdhal, dengan syarat waris tersebut sudah melaksanakan Haji untuk dirinya sendiri. Jika masih belum laksanakan Haji untuk diri sendiri, waris boleh mengupah orang lain seperti melalui agensi umrah yang berlesen.</p>

            <h5>Apakah Pahala Yang Dapat Diperolehi Jika Mengerjakan Haji Bagi Orang Yang Meninggal Dunia?</h5>
            <p>Orang yang mengerjakannya dapat pahala membantu dalam perkara kebajikan. Orang yang mati itu pula gugur kewajipan.</p>
        </div>
    </div>
</section>

@endsection