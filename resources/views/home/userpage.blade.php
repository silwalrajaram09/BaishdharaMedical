<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Baisdharadental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
   <link href="{{asset('home/images/logo.png')}}" rel="icon">
   <link href="{{asset('home/images/logo.png')}}" rel="apple-touch-icon"


    @include('home.css')


  </head>
  <body>

   @include('home.nav')
    <!-- END nav -->

 {{-- start slider --}}

   @include('home.slider')
 {{-- end slider --}}

{{-- start intro --}}
   @include('home.intro')
{{-- end intro --}}
    @include('home.abouthome')
   {{-- start services --}}
   @include('home.services')
   {{-- end services --}}

   @include('home.dentist')

   @include('home.testimonial')




   @include('home.getaquote')

   @include('home.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('home.modal')


 @include('home.script')

  </body>
</html>
