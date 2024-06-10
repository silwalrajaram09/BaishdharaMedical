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
        <div class="slider-item bread-item" style="background-image: url('{{ asset('home/images/bg_1.jpg')}}');"  data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container" data-scrollax-parent="true">
            <div class="row slider-text align-items-end">
              <div class="col-md-7 col-sm-12 ftco-animate mb-5">
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Cosmic-Dentistry</span></p>
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
              <h2 class="mb-2">Cosmic Dentistry</h2>

            </div>
            <p>Cosmetic dentistry offers a range of services aimed at enhancing the appearance of a person’s smile. These services focus on improving the aesthetics of teeth, gums, and overall facial features.</p>
            <p>Here are some common cosmetic dentistry services:</p>

            <p><b>1. Teeth Whitening (Bleaching):</b> </p>
            <li>This procedure involves the use of whitening agents or laser technology to lighten the color of teeth and remove stains, resulting in a brighter smile.</li>
            <br><br>
            <p><b>2. Porcelain Veneers: </b></p>
            <li>Thin porcelain shells are custom-made and bonded to the front surfaces of teeth to conceal imperfections like stains, chips, or misalignments, creating a uniform and attractive smile.</li>
            <br><br><br>
            <p><b>3. Invisalign and Orthodontics:</b></p>
            <li>Clear aligners and traditional braces can be used to straighten misaligned teeth and improve the overall alignment of the bite, enhancing both function and aesthetics.</li>
            <br><br><br>
            <p><b>4. Dental Implants:</b> </p>
            <li>Implants are surgically placed in the jawbone to replace missing teeth, providing a natural-looking and functional solution to tooth loss.</li>
            <br><br>
            <p><b>5. Gum Contouring: </b></p>
            <li>Also known as gum reshaping, this procedure involves the removal of excess gum tissue to create a more balanced and aesthetically pleasing gum line.</li>
            <br><br>
            <p><b>6. Dental Crowns: </b></p>
            <li>Crowns are used to cover damaged or discolored teeth, restoring their appearance and function. They can be made from various materials, including porcelain and metal.</li>
            <br><br><br>
            <p><b>7. Tooth-Colored Fillings: </b></p>
            <li>These fillings are used to replace old silver amalgam fillings or to repair teeth with cavities. They blend seamlessly with natural teeth, making them virtually invisible.</li>
            <br><br><br>
            <p><b>8. Smile Makeovers: </b></p>
            <li>Comprehensive treatment plans that combine various cosmetic procedures to transform the entire smile, addressing multiple issues simultaneously.</li>
            <br><br>
            <p><b>9. Lumineers: </b></p>
            <li>Similar to veneers, Lumineers are ultra-thin porcelain shells that can be bonded to teeth with minimal or no tooth reduction, providing a less invasive option for smile enhancement.</li>
            <br><br><br>
            <p><b>10.Dental Bridges: </b></p>
            <li> Bridges are used to replace missing teeth by anchoring artificial teeth to adjacent natural teeth or dental implants, restoring both appearance and function.</li>
            <br><br><br>
            <p><b>11. Cosmetic Gum Surgery: </b></p>
            <li>Procedures like gingival grafts and crown lengthening can correct gum recession, uneven gum lines, and other gum-related aesthetic issues.</li>
            <br><br>
            <p><b>12. Teeth Contouring and Reshaping: </b></p>
            <li>The removal of small amounts of tooth enamel can improve the shape, length, or surface of teeth, enhancing their appearance.</li>
            <br><br>
            <p><b>13. Snap-On Smile: </b> </p>
            <li>A removable dental appliance that fits over existing teeth, instantly transforming the appearance of the smile without any permanent alterations.</li>
          </div>
          <div class="row">


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
      </style>


   @include('home.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  @include('home.modal')


 @include('home.script')

  </body>
</html>
