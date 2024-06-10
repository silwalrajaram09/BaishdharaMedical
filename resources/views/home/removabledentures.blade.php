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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Removable Dentures</span></p>
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
              <h2 class="mb-2">Removable Dentures</h2>

            </div>
            <p>Removable dentures are a common dental prosthetic used to replace missing teeth and restore oral function and aesthetics. Here are the most important points to know about removable dentures:</p>
            <p></p>



            <p><b>1. Purpose of Removable Dentures:</b></p>
            <li>
                Removable dentures are designed to replace missing teeth, enhance the ability to chew and speak, and improve the appearance of the smile.</p>

            </li>

            <p><b>2. Types of Removable Dentures: </b></p>
            <li> There are two main types of removable dentures: complete (full) dentures, which replace all the teeth in one or both arches, and partial dentures, which replace some missing teeth when natural teeth remain.</li>
            <br><br><br>
            <p><b>3. Materials Used:</b></p>
            <li>Removable dentures are typically made from acrylic resin, metal (for partial dentures), and occasionally porcelain for a more natural appearance.</li>
            <br><br><br>
            <p><b>4. Customization:</b></p>
            <li>Dentures are custom-made to fit the patient’s mouth comfortably and provide a natural look. This involves taking impressions and measurements of the patient’s oral structures.</li>
            <br><br><br>
            <p><b>5. Initial Adjustment Period: </b></p>
            <li>Patients may experience some initial discomfort, difficulty speaking, and eating when they first receive dentures. This is normal as the mouth adjusts to the new prosthetic.</li>
            <br><br><br>
            <p><b>6. Proper Care and Maintenance: </b></p>
            <li>Dentures require regular cleaning to prevent plaque buildup, odors, and stains. They should be removed at night and soaked in a denture cleaning solution. Brushing the gums, tongue, and palate is also important for oral hygiene.</li>
            <br><br><br>
            <p><b>7. Replacing Missing Teeth: </b></p>
            <li>Dentures help maintain proper tooth alignment by replacing missing teeth. Leaving gaps can lead to shifting and misalignment of remaining teeth.</li>
            <br><br><br>
            <p><b>8. Restoring Facial Structure: </b></p>
            <li>Dentures restore facial aesthetics by supporting the lips and cheeks, preventing the sunken appearance that can result from missing teeth.</li>
            <br><br>
            <p><b>9. Chewing and Speech:</b></p>
            <li>Removable dentures improve chewing function, but it may take time to adjust to eating certain foods. They can also help with speech clarity for individuals with missing teeth.</li>
            <br><br><br>
            <p><b>10. Relining and Adjustments: </b></p>
            <li> Over time, the fit of dentures can change due to bone loss and natural aging. Dentures may need to be relined or adjusted to maintain a proper fit.</li>
            <br><br><br>
            <p><b>11. Replacement: </b></p>
            <li>Dentures typically have a lifespan of 5-10 years. They may need to be replaced if they become worn, ill-fitting, or damaged.</li>
            <br><br>
            <p><b>12. Alternative Options: </b></p>
            <li>Implant-supported dentures offer a more stable and permanent solution for replacing missing teeth. These dentures are anchored to dental implants surgically placed in the jawbone.</li>
            <br><br><br>
            <p><b>13. Consultation with a Dentist: </b> </p>
            <li>If you are considering dentures, it’s essential to consult with a dentist who can assess your oral health and discuss the most suitable options for your specific needs.</li>


          </div>
          <div class="row">

            <p>Removable dentures can significantly improve the quality of life for individuals with missing teeth. Proper care and maintenance, along with regular check-ups with a dentist, are crucial to ensuring the longevity and effectiveness of dentures.</p>


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
