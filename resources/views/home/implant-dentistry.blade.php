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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Implant Dentistry</span></p>
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
              <h2 class="mb-2">Implant Dentistry</h2>

            </div>
            <p>Implant dentistry is a specialized field of dentistry that focuses on the placement and restoration of dental implants. Here are some of the most important points to know about implant dentistry:

            </p>
            <p></p>

            <p><b>1. What Are Dental Implants?</b></p>
            <li> Dental implants are artificial tooth roots typically made of titanium that are surgically placed into the jawbone to provide a strong foundation for replacement teeth (crowns, bridges, or dentures).</li>
            <br><br><br>
            <p><b>2. Indications for Dental Implants: </b></p>
            <li>Dental implants are used to replace one or more missing teeth, provide support for dentures, or even support full arches of teeth in cases of complete tooth loss.</li>
            <br><br><br>
            <p><b>3. Advantages of Dental Implants:</b></p>
            <li>Dental implants offer several advantages, including improved chewing ability, natural appearance, durability, and long-term stability. They also prevent bone loss in the jaw.</li>
            <br><br><br>
            <p><b>4. Surgical Procedure:</b> </p>
            <li>Dental implant placement is a surgical procedure typically performed by an oral surgeon or implantologist. It involves making an incision in the gum, drilling a hole into the jawbone, and placing the implant.</li>
            <br><br><br>
            <p><b>5. Healing Period: </b></p>
            <li>Once osseointegration is complete, an abutment is attached to the implant. This serves as a connector between the implant and the replacement tooth. Finally, a custom-made crown, bridge, or denture is attached to the abutment.</li>
            <br><br><br>
            <p><b>6. Restorative Phase: </b></p>
            <li>Crowns are used to cover damaged or discolored teeth, restoring their appearance and function. They can be made from various materials, including porcelain and metal.</li>
            <br><br><br>
            <p><b>7. Types of Dental Implants: </b></p>
            <li>There are various types of dental implants, including endosteal implants (placed in the jawbone), subperiosteal implants (placed on top of the jawbone), and mini implants (smaller in size and used in specific cases).</li>
            <br><br><br>
            <p><b>8. Bone Quality and Quantity: </b></p>
            <li>Adequate bone density and volume in the jaw are crucial for successful implant placement. In cases of insufficient bone, bone grafting may be necessary before implant surgery.</li>
            <br><br><br>
            <p><b>9. Maintenance and Oral Hygiene: </b></p>
            <li>Dental implants require the same care as natural teeth, including regular brushing, flossing, and dental check-ups. Proper oral hygiene is essential to prevent complications.</li>
            <br><br><br>
            <p><b>10.Success Rate:</b> </p>
            <li>Dental implants have a high success rate, typically exceeding 95% when placed by experienced professionals and cared for properly.</li>
            <br><br>
            <p><b>11.Candidates for Implants: </b></p>
            <li>Most individuals with good general health are suitable candidates for dental implants. However, a thorough evaluation by a dentist or oral surgeon is necessary to determine eligibility.</li>
            <br><br><br>
            <p><b>12.Cost Considerations: </b></p>
            <li>The cost of dental implant treatment can vary depending on factors such as the number of implants, type of restoration, and any necessary additional procedures (e.g., bone grafting). Dental insurance coverage for implants may be limited.</li>
            <br><br><br>
            <p><b>13.Longevity: </b></p>
            <li>With proper care, dental implants can last a lifetime, making them a durable and cost-effective solution for tooth replacement.</li>
          </div>
          <div class="row">

            <p>Implant dentistry has revolutionized the field of restorative dentistry, offering patients a reliable and natural-looking option for replacing missing teeth. It is essential to consult with a qualified dental professional to determine if dental implants are the right solution for your specific dental needs.</p>
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
