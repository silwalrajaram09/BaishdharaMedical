<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baisdharamedical</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('home.css')


  </head>
  <body>

   @include('home.nav')
    <!-- END nav -->

    <section class="home-slider owl-carousel">
        <div class="slider-item bread-item" style="background-image: url('home/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
              <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Doctors</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Well Experienced Doctors</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2 class="mb-3">Meet Our Experience Dentist</h2>
              {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> --}}
            </div>
          </div>
          <div class="row">
              <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <a href="{{url('doctors/bishwo')}}">
                  <div class="staff">
                        <div class="img mb-4" style="background-image: url('home/images/bishwo.jpg');"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Dr Bishwo Prachanda Sedhain</a></h3>
                            <span class="position">Master of Dental Surgery in
                                Oral and Maxillofacial Surgery</span>
                            <div class="text">
                              <p></p>
                              <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          </ul>
                          </div>
                        </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <a href="{{url('doctors/dinesh')}}">
                  <div class="staff">
                        <div class="img mb-4" style="background-image: url('home/images/dinesh.jpg');"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Dr Dinesh Sharma Bhusal</a></h3>
                            <span class="position">Master of Dental Surgery in
                                Prosthodontics and implantology</span>
                            <div class="text">
                              <p></p>
                              <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          </ul>
                          </div>
                        </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <a href="{{url('doctors/merina')}}">
                  <div class="staff">
                        <div class="img mb-4" style="background-image: url('home/images/merina.jpg');"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Dr Merina Joshi</a></h3>
                            <span class="position">Master of Dental Surgery in
                                Orthodontics</span>
                            <div class="text">
                              <p></p>
                              <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          </ul>
                          </div>
                        </div>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 d-flex mb-sm-4 ftco-animate">
                <a href="{{url('doctors/muna')}}">
                  <div class="staff">
                        <div class="img mb-4" style="background-image: url('home/images/muna.jpeg');"></div>
                        <div class="info text-center">
                            <h3><a href="teacher-single.html">Dr Muna Kandel.</a></h3>
                            <span class="position">MS Human Anatomy</span>
                            <div class="text">
                              <p></p>
                              <ul class="ftco-social">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          </ul>
                          </div>
                        </div>
                  </div>
                </a>
              </div>
          </div>
          <div class="row  mt-5 justify-conten-center">
              <div class="col-md-8 ftco-animate">
                  <p></p>
              </div>
          </div>
        </div>
      </section>



   @include('home.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('home.modal')


 @include('home.script')

  </body>
</html>
