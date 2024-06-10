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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                <h1 class="mb-3" data-scrollax=" properties: { translateY: '70%', opacity: .9}">Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
      </section>

          <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
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
               class="mb-2">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Address:</span> Baisdhara, kathmandu</p>
            </div>
            <div class="col-md-3">
              <p><span>Phone:</span> <a href="tel://1234567920">9803421766 , 014962513</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:info@yoursite.com">mail@baishdharadental.com</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Website</span> <a href="#">baishdharadental.com</a></p>
            </div>
          </div>
          <div class="row block-9">
            <div class="col-md-6 pr-md-5">

                <div class="cardbody">
                    @if(Session::has('success'))
                    <div class="alert alert-success" id="alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{Session::get('success')}}
                    </div>
                @endif
                </div>

                <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                    {{ csrf_field() }}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Email:</strong>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Phone:</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Subject:</strong>
                                <input type="text" name="subject" class="form-control" placeholder="Subject" value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Message:</strong>
                                <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button style="color: #fff !important;
                        background: #2f89fc; border-color:#2f89fc;" class="btn btn-success btn-submit">Submit</button>
                    </div>


                </form>

            </div>

            <div class="col-md-6" class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14125.257744231585!2d85.302198!3d27.738446!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1fee8d13d%3A0x30058cbbf8bc3d57!2sBaishdhara%20Dental%20Clinic!5e0!3m2!1sen!2sus!4v1695370656667!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
