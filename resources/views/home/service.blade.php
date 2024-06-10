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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Services</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Our Service Keeps you Smile</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

          <section class="ftco-section">
        <div class="container">
            <div style="margin-top: 20px;" class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
              <h2 class="mb-2">Our Service Keeps you Smile</h2>
              <p></p>
            </div>
          </div>
          <div class="row">

            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/cosmic-dentistry')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class=""><img style=" margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/cosmetic-dentistry.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Cosmetic Dentistry</h3>
                  <p>Cosmetic dentistry offers a range of services aimed at enhancing the appearance of a person’s smile. These services focus on improving the aesthetics of teeth, gums, and overall facial features.</p>
                </div>
              </div>
            </div>
            </div>
        </a>
            </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/implant-dentistry')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style=" margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/dental-implant.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Implant Dentistry</h3>
                  <p>Implant dentistry is a specialized field of dentistry that focuses on the placement and restoration of dental implants. Here are some of the most important points to know about implant dentistry.</p>
                </div>
              </div>
            </div>
            </div>
        </a>
        </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/root-canal-treatment')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style="margin-top:17px;  margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/rct.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Root Canal Treatment</h3>
                  <p>Root canal treatment is a dental procedure designed to save and repair a tooth that is infected or severely damaged. Here are the most important points to know about root canal treatment.</p>
                </div>
              </div>
            </div>
        </div>
    </a>
    </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/orthodontics')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""> <img style=" margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/orthodontic.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Orthodontics</h3>
                  <p>Orthodontics is a specialized field of dentistry that focuses on the diagnosis, prevention, and correction of misaligned teeth and jaws. Here are the most important points to know about orthodontics.</p>
                </div>
              </div>
            </div>
        </div>
    </a>
    </div>

            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/removable-dentures')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style="margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/denture.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Removable Dentures</h3>
                  <p>Removable dentures are a common dental prosthetic used to replace missing teeth and restore oral function and aesthetics. Here are the most important points to know about removable dentures.</p>
                </div>
              </div>
            </div>
        </div>
    </a>
    </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/minor-oral-surgery')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style="margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/Minor-Oral-Surgery.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Minor Oral Surgery</h3>
                  <p>Common minor oral surgery procedures encompass a range of dental surgeries that address various oral health issues. Here are some of the most common minor oral surgery procedures.</p>
                </div>
              </div>
            </div>
        </div>
    </a>
    </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/scaling-polishing')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style="margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/scaling.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Scaling and Polishing</h3>
                  <p>Scaling and polishing are essential dental procedures performed by dental hygienists or dentists to maintain oral health and prevent dental problems. Here are the most important points to know about scaling and polishing.</p>
                </div>
              </div>
            </div>
        </div>
    </a>
    </div>
            <div style="margin-top: 20px;" class="col-md-3 d-flex align-self-stretch ftco-animate">
                <a href="{{url('services/wisdom-tooth-extraction')}}">
                <div class="card">
                    <div class="card-body">
              <div class="media block-6 services d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                      <span class=""><img style="margin-top:17px; margin-bottom:10px; height:100px; border-radius: 50%;" src="home/images/dental-implant.jpeg" alt=""></span>
                </div>
                <div class="media-body p-2 mt-3">
                  <h3 class="heading">Wisdom Tooth Extraction</h3>
                  <p>Wisdom tooth extraction is a common dental procedure performed to remove the third molars, also known as wisdom teeth. Here are the most important points to know about wisdom tooth extraction.</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        </div>
    </div>
</div>
      </section>


      <style>
          .card{
      margin: 10px auto;
      box-shadow: 0px 2px 4px 0 rgba(0,0,0,0.2);
      border-radius: 6px;
      height: 100%;
      transition: 0.3s;
    }
.card:hover {
    box-shadow: 1px 10px 16px 0 rgba(0,0,0,0.3);

}
.heading{
    color: #296db1;

}
p{
    text-align: justify;
}
a{
    text-decoration: none;
}
a:hover{
    text-decoration: none;
}
      </style>


   @include('home.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('home.modal')


 @include('home.script')

  </body>
</html>
