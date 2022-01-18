<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MM Kafalah Agency</title>

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{asset('landingpage2/assets/favicon.ico')}}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('landingpage2/css/styles.css')}}" rel="stylesheet" />
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
                            <a class="nav-link btn-outline-light" href="{{url ('/#misi ')}}">
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
                    <div class="col-xl-12">
                        <form class="form-subscribe" id="contactFormFooter" method="GET" data-sb-form-api-token="API_TOKEN" action="{{url ('/')}}">
                            @yield('content')
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Back to top button -->
        <button type="button" class="btn btn-secondary btn-floating btn-lg" id="btn-back-to-top">
            <i class="bi bi-chevron-up"></i>
        </button>

        <!-- Footer-->
        <footer class="footer bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="{{url ('/aboutus ')}}">About</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{url ('/contact ')}}">Contact</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="{{url ('/privacy-policy ')}}">Privacy Policy</a></li>
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
        <script src="{{asset('landingpage2/js/scripts.js')}}"></script>
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
