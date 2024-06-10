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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
                <h1  class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">About Us</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

          <section class="ftco-section">
          <div class="container">
              <div class="row d-md-flex">
                  <div class="col-md-6 ftco-animate img about-image order-md-last" style="background-image: url('home/images/about.jpg');">
                  </div>
                  <div class="col-md-6 ftco-animate pr-md-5 order-md-first">
                      <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                      <div class="nav ftco-animate nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        {{-- <a class="nav-link active" id="v-pills-whatwedo-tab" data-toggle="pill" href="#v-pills-whatwedo" role="tab" aria-controls="v-pills-whatwedo" aria-selected="true">What we do</a>

                        <a class="nav-link" id="v-pills-mission-tab" data-toggle="pill" href="#v-pills-mission" role="tab" aria-controls="v-pills-mission" aria-selected="false">Our mission</a>

                        <a class="nav-link" id="v-pills-goal-tab" data-toggle="pill" href="#v-pills-goal" role="tab" aria-controls="v-pills-goal" aria-selected="false">Our goal</a> --}}
                      </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">

                      <div class="tab-content ftco-animate" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-whatwedo" role="tabpanel" aria-labelledby="v-pills-whatwedo-tab">
                            <div>
                              <h2 style="
                                font-size: 30px;
                                font-weight: 400;
                                background: #2f89fc;
                                background: -moz-linear-gradient(-45deg, #2f89fc 0%, #2cbcbc 100%);
                                background: -webkit-gradient(left top, right bottom, color-stop(0%, #2f89fc), color-stop(100%, #2cbcbc));
                                background: -webkit-linear-gradient(-45deg, #2f89fc 0%, #2cbcbc 100%);
                                background: -o-linear-gradient(-45deg, #2f89fc 0%, #2cbcbc 100%);
                                background: -ms-linear-gradient(-45deg, #2f89fc 0%, #2cbcbc 100%);
                                background: -webkit-linear-gradient(315deg, #2f89fc 0%, #2cbcbc 100%);
                                background: -o-linear-gradient(315deg, #2f89fc 0%, #2cbcbc 100%);
                                background: linear-gradient(135deg, #2f89fc 0%, #2cbcbc 100%);
                                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2f89fc', endColorstr='#00dc94', GradientType=1 );
                                -webkit-background-clip: text;
                                -webkit-text-fill-color: transparent;
                            "
                               class="mb-2">About Us</h2>
                                <p style="text-align: justify;" >Welcome to Baishdhara Dental Clinic, where smiles are crafted with care and confidence.  Our state-of-the-art dental clinic is a sanctuary of oral health, offering a blend of expertise, innovation, and personalized attention. With a team of skilled dental professionals, we’re dedicated to ensuring your comfort while delivering exceptional care. From routine check-ups to transformative smile makeovers, we’re committed to providing you with a reason to smile. Our top services include cosmetic dentistry and implant dentistry which are appreciated by many patients. Discover the artistry of oral wellness at Baishdhara Dental Clinic – where every visit leaves you with a brighter, healthier, and more radiant smile.</p>
                              <p></p>
                              </div>
                        </div>

                        {{-- <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                          <div>
                              <h2 class="mb-4">To Accomodate All Patients</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                              </div>
                        </div> --}}

                        {{-- <div class="tab-pane fade" id="v-pills-goal" role="tabpanel" aria-labelledby="v-pills-goal-tab">
                          <div>
                              <h2 class="mb-4">Help Our Customers Needs</h2>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt voluptate, quibusdam sunt iste dolores consequatur</p>
                              </div>
                        </div> --}}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </section>

      <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2 class="mb-3">Meet Our Team</h2>
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
