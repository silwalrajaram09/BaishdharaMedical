
<section class="ftco-quote">
    <div class="container">
        <div class="row">

            <div class="col-md-6 py-5 pl-md-5">
                <div class="heading-section mb-5 ftco-animate">
            <h2 class="mb-2">Contact Us</h2>
            <div class="cardbody">
                @if(Session::has('success'))
                <div class="alert alert-success" id="alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{Session::get('success')}}
                </div>
            @endif
            </div>
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


