<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- My Fonts -->
        <link href="https://db.onlinewebfonts.com/c/dae123c34c5e1cb46f0531f8bad05ca6?family=Nasalization" rel="stylesheet" type="text/css"/>
        <link href="https://v-fonts.com/fonts/bahnschrift" rel="stylesheet" type="text/css"/>
        

        <!-- My CSS -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <title>HISHOT</title>
    </head>
    <body>
      <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light navigasi">
            <a class="navbar-brand" href="#">
            <img src="{{asset('Assets/HomePage/logo atas.png')}}" width="35%" height="35%" alt="">
            </a>
            <button class="navbar-toggler text-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse show" id="navbarSupportedContent" style="margin-left: 10%;">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#carouselExampleIndicators">HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#event">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sponsor">Sponsor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#get-in-touch">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#ourloc">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                </ul>
                <img src="{{asset('Assets/HomePage/gabungan bagian atas.png')}}"  alt="" class="navbar_img">
            </div>
        </nav>

        <!-- Coming Soon -->
        <div class="background-coming-soon">
          <div class="comingSoon"></div>
        </div>

        <!-- slide show -->
        <div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('Assets/HomePage/background+logo.png')}}" alt="First slide">
                    <div class="button-container">
                        <!-- <div class="start"> -->
                        <a href="#about-us">
                        <button type="button" class="btn btn-outline-dark">Start</button>
                        </a>
                        <!-- </div> -->
                        <!-- <div class="register"> -->
                        <a href="#register">
                        <button type="button" class="btn btn-outline-dark">Register</button>
                        </a>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('Assets/Negara/stdn fix jakarta.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('Assets/Negara/Malaysia fix.jpg')}}" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('Assets/Negara/Singapore fix.jpg')}}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('Assets/Negara/Australiafix.jpg')}}" alt="fourth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('Assets/Negara/Korea Selatan fix.jpg')}}"alt="fifth slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('Assets/Negara/Japan fix.jpg')}}"alt="sixth slide">
              </div>
            </div>
            <a class="carousel-control-prev left-position" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next right-position" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- about us -->
        <div id="about-us">
          <img src="{{asset('Assets/Trailer/bagian atas element.png')}}" alt="" class="img-elem upper">
          <div class="container-fluid about-us-item">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center my-4">
                <div class="iframe-container">
                  <iframe src="https://drive.google.com/file/d/1DXD7p4PIM8SW6K6NV2HUqzxaGoPeJ0Kq/preview" class="responsive-iframe" frameborder="0" class="trailer"></iframe>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 text-center my-4">
                <div class="img-text-container">
                  <img src="{{asset('Assets/Trailer/ignite.png')}}"class="img-fluid img-content-ignite" alt="">
                  <img src="{{asset('Assets/Trailer/about us.png')}}" class="img-fluid img-content-text" alt="">
                </div>
                <a href="#event">
                <button type="button" class="btn btn-outline-dark see-more">See More</button>
                </a>
              </div>
            </div>  
          </div>
          <img src="{{asset('Assets/Trailer/element bagian bawah.png')}}" alt="" class="img-elem bottom">
        </div>

        
        <!-- Event-->
        <div id="event" class="pt-5">
            <div class="container text-white pt-5">
              <div class="heading">
                <h1 class="display-4 text-center text-white">Event</h1>
              </div>
              <div class="slideshow-container pt-5">
                <div class="mySlides">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center my-4 flex-column">
                      <div class="heading d-flex justify-content-end">
                        <h3 class="text">Seminar</h3>
                      </div>
                      
                      <div>
                        <p class="text">
                          - Utilizing Machine Learning in Business Marketing
                        </p>
                        <p class="text">
                          - Improving User Experience with Machine Learning
                        </p>
                      </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                      <a class="glyphicon glyphicon-chevron-right" onclick="plusSlides(-1)"></a>
                      <img src="{{asset('Assets/eventseminar/gambar.png')}}" class="event-seminar" alt="" />
                      <a class="glyphicon glyphicon-chevron-left" onclick="plusSlides(1)"></a>
                    </div>
                  </div>
                </div>
            
                <div class="mySlides">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center my-4 flex-column">
                      <div class="heading d-flex justify-content-end">
                        <h3 class="text">workshop</h3>
                      </div>
                      
                      <div>
                        <p class="text">
                          - The Dawn of Machine Learning (phyton experience)
                        </p>
                        <p class="text">
                          - EML: Everyday Machine Leaerning
                        </p>
                      </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                      <a class="glyphicon glyphicon-chevron-right" onclick="plusSlides(-1)"></a>
                      <img src="{{asset('Assets/eventworkshop/gambar workshop.png')}}" class="event-workshop" alt="" />
                      <a class="glyphicon glyphicon-chevron-left" onclick="plusSlides(1)"></a>
                    </div>
                  </div>
                </div>
            
                <div class="mySlides">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center my-4 flex-column w-100">
                      <div class="stdn d-flex justify-content-end">
                        <h3 class="text">Study Tour Dalam negeri</h3>
                      </div>
                      
                      <div>
                        <p class="stdn-text">
                          - Renom Infrastructure Indonesia
                        </p>
                        <p class="stdn-text">
                          - International Business Machines Corporattion (IBM) Indonesia.
                        </p>
                        <p class="stdn-text">
                          - Garena Indonesia
                        </p>
                      </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                      <a class="glyphicon glyphicon-chevron-right" onclick="plusSlides(-1)"></a>
                      <img src="{{asset('Assets/eventstdn/gambar stdn.png')}}" class="event-stdn" alt="" />
                      <a class="glyphicon glyphicon-chevron-left" onclick="plusSlides(1)"></a>
                    </div>
                  </div>
                </div>
            
                <div class="mySlides">
                  <div class="row">
                    <div class="col-lg-5 col-md-6 col-sm-12 d-flex justify-content-center my-4 flex-column w-100">
                      <div class="stln d-flex justify-content-end">
                        <h3 class="text">Study Tour Luar negeri</h3>
                      </div>
                    </div>

                    <div class="col d-flex justify-content-center align-items-center">
                      <a class="glyphicon glyphicon-chevron-right" onclick="plusSlides(-1)"></a>
                      <img src="{{asset('Assets/eventstln/coming soon.png')}}" class="event-stdn" alt="" />
                      <a class="glyphicon glyphicon-chevron-left" onclick="plusSlides(1)"></a>
                    </div>
                  </div>
                </div>
            
              <div class="dot-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
            
              <script>
                var slideIndex = 1;
                showSlides(slideIndex);
            
                function plusSlides(n) {
                  showSlides((slideIndex += n));
                }
            
                function currentSlide(n) {
                  showSlides((slideIndex = n));
                }
            
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {
                    slideIndex = 1;
                  }
                  if (n < 1) {
                    slideIndex = slides.length;
                  }
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                  }
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex - 1].style.display = "block";
                  dots[slideIndex - 1].className += " active";
                }
              </script>
            </div>
          </div>
        </div>

        <!-- Sponsor -->
        <div id="sponsor">
          <img src="{{asset('Assets/assetsponsored/element bagian atas fix.png')}}" alt="" class="img-corner upper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-5 col-sm-12 d-flex text-center justify-content-center my-4">
                <div class="daftar-sponsor">
                  <h1>Sponsored By</h1>
                  <br><br><br>
                </div>
              </div>
              <div class="col-lg-6 col-md-5 col-sm-12 text-center my-4">
                <div class="daftar-medpar">
                  <h1>Media Partner</h1>
                </div>
              </div>
            </div>  
          </div>
          <img src="{{asset('Assets/assetsponsored/element bagian bawah fix.png')}}" alt="" class="img-corner bottom">
        </div>
        
        <!-- Get in Touch -->
        <div id="get-in-touch">
          <div class="container-coating my-5 mx-2">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-start align-items-center flex-column my-2">
                  <h1 style="color: white;">GET IN TOUCH</h1>
                  <div class="container-form-modified">
                    <form action="" class="row">
                      <input type="text" class="col-6 input" placeholder="Name">
                      <input type="email" class="col-6 input" placeholder="Email Address">
                      <input type="text" class="col-12 input" placeholder="Subject">
                      <textarea name="" id="" cols="30" rows="10" class="col-12 input"></textarea>
                      <button class="col-12">Submit</button>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center flex-column my-2" style="color: white;">
                  <h1 class="text-center">OUR ADDRESS</h1>
                  <div>
                    <p>BINUS University @ Alam Sutera</p>
                    <span>
                      <img src="{{asset('Assets/assetgetintouchandouraddress/gambar location.png')}}" alt="" class="img-location">
                      Address : Jl. Jalur Sutera Barat Kav. 21
                    </span>
                    <p>Alam Sutera, Tangerang</p>
                    <p>Contact Person :</p>
                    <ol>
                      <li>Austin Andika</li>
                      <ul>
                        <li>
                          Line id : tanujaya_austin
                        </li>
                        <li>
                          No telp :
                        </li>
                      </ul>
                      <li>Zahra Aisha</li>
                      <ul>
                        <li>Line id : chriimus</li>
                        <li>No telp :</li>
                      </ul>
                    </ol>
                    <div class="social-media-container">
                      <img src="{{asset('Assets/assetgetintouchandouraddress/gambar email.png')}}" alt="">
                      <span>Email :</span>
                    </div>
                    <div class="social-media-container">
                      <img src="{{asset('Assets/assetgetintouchandouraddress/gambar line.png')}}" alt="">
                      <span>Line : @tng5900j</span>
                    </div> 
                    <div class="social-media-container">
                      <img src="{{asset('Assets/assetgetintouchandouraddress/gambar instagram.png')}}" alt="">
                      <span>Instagram : @hishot_2020</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Our locaction -->
        <div class="container-fluid" id="ourloc">
            <div class="row">
                <div class="col text-center pt-3">
                    <h1>OUR LOCATION</h1>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col text-center">
                    <h2>Binus Anggrek</h2>
                    <div id="map-container" class="z-depth-1-half map-container pt-5">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.468182239488!2d106.77940371536977!3d-6.20180106248217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f6dcc7d2c4ad%3A0x209cb1eef39be168!2sUniversitas+Bina+Nusantara+Anggrek!5e0!3m2!1sid!2sid!4v1553930488361!5m2!1sid!2sid"
                            frameborder="0"
                            allowfullscreen
                            ></iframe>
                    </div>
                </div>
                <div class="col text-center">
                    <h2>Alam Sutra</h2>
                    <div
                        id="map-container"
                        class="z-depth-1-half map-container pt-5"
                        style="height: 300px;"
                        >
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.311889734086!2d106.64694211536995!3d-6.2225424626775245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f96766c15d5d%3A0x71e82ef4bf20bb4!2sBinus+Alam+Sutera!5e0!3m2!1sid!2sid!4v1553930684649!5m2!1sid!2sid"
                            frameborder="0"
                            allowfullscreen
                            ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer hishot ig -->
        <div class="hishotig pt-3">
            <div class="text-center align-middle pt-5">
                <img src="{{asset('Assets/assetourlocation/gambar bagian bawah.png')}}"/> 
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>