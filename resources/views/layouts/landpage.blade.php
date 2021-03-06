<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MM Kafalah Agency</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('landingpage/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('landingpage/css/styles.css')}}" rel="stylesheet" />

        <style>
            #btn-back-to-top 
            {
                position: fixed;
                bottom: 20px;
                right: 20px;
                display: none;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
            <div class="container container-fluid">               
                <a class="navbar-brand" href="{{url ('/ ')}}"><img style="width:60px;height:50px;" src="{{asset('landingpage2/assets/img/mm-kafalah.jpg')}}" alt="Logo MM Kafalah Agency">MM Kafalah Agency</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-light" href="#misi">
                                VISI & MISI
                            </a>
                        </li>
                    </ul>
                    &nbsp;
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-outline-light" href="" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                PERKHIDMATAN
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{url ('/hibah-aset ')}}">HIBAH ASET</a></li>
                                <li><a class="dropdown-item" href="{{url ('/urus-pusaka ')}}">URUS PUSAKA</a></li>
                                <li><a class="dropdown-item" href="{{url ('/khairat ')}}">KHAIRAT</a></li>
                                <li><a class="dropdown-item" href="{{url ('/hartanah ')}}">HARTANAH</a></li>
                            </ul>
                        </li>
                    </ul>
                    &nbsp;
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn-outline-light" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                GALERI
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{url ('/poster-dan-aktiviti ')}}">POSTER & AKTIVITI</a></li>
                                <li><a class="dropdown-item" href="{{url ('/video ')}}">VIDEO</a></li>
                            </ul>
                        </li>
                    </ul>
                    &nbsp;
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-light" href="{{url ('/contact ')}}">
                                HUBUNGI
                            </a>
                        </li>
                    </ul>
                </div>

                <a class=" btn btn-secondary" href="{{url ('login')}}">Log Masuk <i class="bi bi-box-arrow-in-right"></i></a>
            </div>
        </nav>
        <!-- Call to Action-->
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Cari Nombor Kad Pengenalan Anda!</h2>
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form class="form-subscribe" id="contactFormFooter" method="GET" data-sb-form-api-token="API_TOKEN" action="{{url ('/')}}">
                            <!-- Email address input-->
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" name="queries" id="nombor_ic" type="number" placeholder=" Nombor I/C..." min="1" data-sb-validations="required,nombor_ic" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Your I/C Number is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Your I/C Number is invalid.</div>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-primary btn-lg" id="submitButton" type="submit"><i class="bi bi-search"> Carian</i></button>
                                </div>

                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!-- <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>-->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!--<div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>-->
                            <!--  -->
                            

                        </form>
                        
                    </div>
                </div>
            </div>
            &nbsp;
            @yield('content')
        </section>
        
                <!-- Icons Grid-->
                <section class="features-icons bg-light text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <h3 id="misi" class="text-uppercase fw-bold mb-4">Misi Syarikat</h3>
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi bi bi-wallet-fill m-auto text-primary"></i></div>
                                    
                                    <p class="lead mb-0 fw-bold">Menjadi syarikat yang dekat dengan masyarakat di mana dapat memberi khidmat masyarakat di dalam menyelesaikan masalah berkaitan harta pusaka</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi bi-briefcase-fill m-auto text-primary"></i></div>
                                    
                                    <p class="lead mb-0 fw-bold">Mewujudkan lebih banyak peluang pekerjaan masyarakat di luar sana</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi bi-people-fill m-auto text-primary"></i></div>
                                    
                                    <p class="lead mb-0 fw-bold">Membantu masyarakat menyempurnakan tuntutan fardhu kifayah sesama islam</p>
                                </div>
                            </div>
                            &nbsp;<hr style="border:2px solid black;">&nbsp;
                            <h3 class="text-uppercase fw-bold mb-4">Visi Syarikat</h3>
                            <div class="col-lg-12">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                                    <div class="features-icons-icon d-flex"><i class="bi bi-cash-coin m-auto text-primary"></i></div>
                                    
                                    <p class="lead mb-3 fw-bold">Dapat membantu kerajaan menurunkan kadar aset terbeku milik orang islam</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="bg-secondary p-5" >
                    <div class="container text-center text-light">
                        <h1 class="mb-4 ">Dari Abi Bazrah Al-Asmi Berkata:</h1>
                        <p class="fs-5">Baginda Rasulullah SAW bersabda, tidak akan melangkah kaki anak Adam pada hari kiamat sehingga ditanyakan tentang umurnya pada apa ia habiskan, tentang ilmunya pada apa ia lakukan, tentang hartanya dari mana ianya diperolehi dan ke mana ianya dibelanjakan dan tentang tubuhnya pada apa ianya dihabiskan. (HR Imam Tirmizi)</p>
                    </div>
                </section>
                
                <section class="features-icons bg-light text-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="p-4">
                                <h3 class="text-uppercase fw-bold mb-4">PERKHIDMATAN KAMI</h3>
                            </div>
                            
                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class=" features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon "><a class="fs-4 fw-bold text-decoration-none " href="{{url ('/hibah-aset ')}}"><i class="bi bi-bank2 m-auto text-secondary"></i><br>Hibah Aset</a></div>
                                </div>
                            </div>

                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon "><a class="fs-4 fw-bold text-decoration-none" href="{{url ('/urus-pusaka ')}}"><i class="bi bi-file-text-fill m-auto text-secondary"></i><br>Urus Pusaka</a></div>
                                </div>
                            </div>

                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon"><a class="fs-4 fw-bold text-decoration-none" href="{{url ('/khairat ')}}"><i class="bi bi-collection-fill m-auto text-secondary"></i><br>Khairat Kifayahku</a></div>
                                </div>
                            </div>

                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon "><a class="fs-4 fw-bold text-decoration-none" href="{{url ('/hartanah ')}}"><i class="bi bi-house-door-fill m-auto text-secondary"></i><br>Hartanah</a></div>
                                </div>
                            </div>

                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon "><a class="fs-4 fw-bold text-decoration-none" href="{{url ('/poster-dan-aktiviti ')}}"><i class="bi bi-file-image-fill m-auto text-secondary"></i><br>Poster</a></div>
                                </div>
                            </div>

                            <div class="col-lg-4 border border-secondary border-3 rounded-3">
                                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3 p-4">
                                    <div class="features-icons-icon "><a class="fs-4 fw-bold text-decoration-none" href="{{url ('/video ')}}"><i class="bi bi-camera-video-fill m-auto text-secondary"></i><br>Video</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <hr>

                <!-- Back to top button -->
                <button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
                <i class="bi bi-chevron-up"></i>
                </button>

        <!-- Footer-->
        <footer class=" footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="{{url ('/aboutus ')}}">Tentang Kami</a></li>
                            <li class="list-inline-item">???</li>
                            <li class="list-inline-item"><a href="{{url ('/contact ')}}">Hubungi</a></li>
                            <li class="list-inline-item">???</li>
                            <li class="list-inline-item"><a href="{{url ('/privacy-policy ')}}">Privasi</a></li>
                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0">&copy; MMKafalah Agency 2021. All Rights Reserved.</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://www.youtube.com/channel/UCHoUVraMSrMk1U7GavYOHLg" target="_blank"><i class="bi bi-youtube fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://www.facebook.com/MMKafalahAgensi/" target="_blank"><i class="bi-facebook fs-3"></i></a>
                            </li>
                            <li class="list-inline-item me-4">
                                <a href="https://www.instagram.com/mmkafalah_agency/" target="_blank"><i class="bi-instagram fs-3"></i></a>
                            </li>
                            <li class="list-inline-item ">
                                <a href="https://t.me/mmkafalahagency" target="_blank"><i class="bi-telegram fs-3"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('landingpage/js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        
        <script>
            //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
        </script>
        
    </body>
</html>
