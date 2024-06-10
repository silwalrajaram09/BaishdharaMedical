<section class="testimonials">
    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center heading-section ftco-animate">
          <h2 class="mb-3">Happy Patients</h2>
          {{-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p> --}}
        </div>
      </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <!-- Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <!-- Item-1 -->
                        <div class="carousel-item active text-center">
                            <img decoding="async" src="{{ asset('home/images/saroj.png')}}" alt="" class="center-block team" data-lazy-src="https://i.ibb.co/8x9xK4H/team.jpg"><noscript><img decoding="async" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="center-block team"></noscript>
                            <h3>Dr Saroj Kandel</h3>
                            <h4>Dr USA</h4>
                            <p>I had a great experience at the dental clinic. The staff was friendly and professional, and the dentist was very knowledgeable.<br>
                                 I would definitely recommend this clinic to anyone looking for quality dental care</p>
                        </div>
                        <!-- Item-2 -->
                        <div class="carousel-item text-center">
                            <img decoding="async" src="{{ asset('home/images/maskey.png')}}" alt="" class="center-block team" data-lazy-src="https://i.ibb.co/8x9xK4H/team.jpg"><noscript><img decoding="async" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="center-block team"></noscript>
                            <h3>Julie Maskey</h3>
                            <h4>Freelancer, Ktm</h4>
                            <p>Great staff and quality care!</p>
                        </div>
                        <!-- Item-3 -->
                        <div class="carousel-item text-center">
                            <img decoding="async" src="{{ asset('home/images/adhikary.png')}}" alt="" class="center-block team" data-lazy-src="https://i.ibb.co/8x9xK4H/team.jpg"><noscript><img decoding="async" src="https://i.ibb.co/8x9xK4H/team.jpg" alt="" class="center-block team"></noscript>
                            <h3>Salik Adhikary</h3>
                            <h4>Lecturer TU</h4>
                            <p>It is one of best dental clinic with Nepal’s well experienced and skilled dental surgeon.</p>
                        </div>

                    </div>
                    <a
                        class="carousel-control-prev control"
                        data-target="#carouselExampleIndicators"
                        role="button"
                        data-slide="prev">
                        <span class="fa fa-angle-left icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a
                        class="carousel-control-next control"
                        data-target="#carouselExampleIndicators"
                        role="button"
                        data-slide="next">
                        <span class="fa fa-angle-right icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .heading {
    position: relative;
}
.testimonials {


    background-attachment: fixed;

    color: #296db1;
    position: relative;
    padding: 0px 0px 100px 0px;



}

.testimonials .heading h2 {

    color: #2cbcbc;
    font-size: 30px;
    font-weight: 400;
}

.testimonials .heading h2 span {
    color: #296db1;
}

.testimonials p {
    font-size: 15px;
    font-weight: 400;
    line-height: 1.7;
    color: black;
    margin: 20px 0;
    padding: 0;
}

/* Image */
.testimonials .carousel-inner .carousel-item .team {
    width: 100px;
    height: 100px;
    border: 2px solid #296db1;
    border-radius: 100%;
    padding: 5px;
    margin: 50px 0 15px;
}

.testimonials .carousel-inner .carousel-item h3 {
    font-size: 20px;
    color: #296db1;
    font-weight: 600;
}

.testimonials .carousel-inner .carousel-item h4 {
    font-size: 14px;
    font-weight: 300;
    color: #296db1;
    margin-bottom: 20px;
}

.testimonials .carousel-indicators {
    bottom: -30px;
}

.testimonials .carousel-indicators li {
    background-color: #296db1;;
    border-radius: 30px;
    height: 4px;
    width: 40px;
}

.testimonials .carousel-indicators .active {
    background-color: #da423c;
}

.testimonials .control span {
    cursor: pointer;
}

.testimonials .icon {
    height: 40px;
    width: 40px;
    background-size: 100%, 100%;
    border-radius: 50%;
    font-size: 30px;
    background-image: none;
    color: #296db1;
}
</style>
