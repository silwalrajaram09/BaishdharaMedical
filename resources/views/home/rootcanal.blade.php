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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Root Canal Treatment</span></p>
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
              <h2 class="mb-2">Root Canal Treatment</h2>

            </div>
            <p>Root canal treatment is a dental procedure designed to save and repair a tooth that is infected or severely damaged. Here are the most important points to know about root canal treatment:.</p>
            <p></p>



            <p><b>1. Purpose of Root Canal Treatment:</b></p>
            <li>
                Root canal treatment is performed to treat and save a tooth that has a damaged or infected pulp (the innermost part of the tooth containing nerves, blood vessels, and connective tissue).</p>

            </li>

            <p><b>2. Signs Indicating the Need for a Root Canal: </b></p>
            <li> Severe toothache, especially when chewing or applying pressure.</li>
            <li>Prolonged sensitivity to hot or cold temperatures. </li>
            <li>Swollen or tender gums near the affected tooth.</li>
            <li>Darkening or discoloration of the tooth.</li>
            <li>A pimple-like bump on the gum near the tooth (abscess).</li>
            <br><br>
            <p><b>3. Procedure Overview:</b></p>
            <li>Root canal treatment involves removing the infected or damaged pulp from the tooth, cleaning and disinfecting the pulp chamber and root canals, and then filling and sealing the space. This prevents further infection and preserves the tooth.</li>
            <br><br><br>
            <p><b>4.Local Anesthesia:</b></p>
            <li> The procedure is typically performed under local anesthesia to ensure the patient’s comfort and minimize pain during the treatment.</li>
            <br><br>
            <p><b>5. Pulp Removal:</b></p>
            <li>The dentist or endodontist (a specialist in root canal therapy) creates an opening in the tooth to access the pulp chamber and root canals. The infected or damaged pulp is carefully removed.</li>
            <br><br><br>
            <p><b>6. Cleaning and Disinfection: </b></p>
            <li>The empty pulp chamber and root canals are thoroughly cleaned and disinfected to eliminate bacteria and prevent reinfection.</li>
            <br><br>
            <p><b>7. Filling and Sealing: </b></p>
            <li>After cleaning, the space inside the tooth is filled with a biocompatible material, typically a rubber-like substance called gutta-percha. The access opening is sealed with a temporary or permanent filling.</li>
            <br><br><br>
            <p><b>8. Restoration: </b></p>
            <li>Following a successful root canal, the tooth may require a restoration, such as a crown, to restore its strength and appearance. This step is crucial for protecting the tooth and ensuring its functionality.</li>
            <br><br><br>
            <p><b>9. Pain Management: </b></p>
            <li>Post-procedure discomfort is common but usually manageable with over-the-counter pain medications. Patients are advised to follow their dentist’s or endodontist’s post-treatment care instructions.</li>
            <br><br><br>
            <p><b>10. Success Rate: </b></p>
            <li> Root canal treatment has a high success rate and can save teeth that would otherwise need extraction. Properly treated teeth can last a lifetime with regular oral care.</li>
            <br><br><br>
            <p><b>11. Alternatives to Root Canal Treatment: </b></p>
            <li>The primary alternative to root canal treatment is tooth extraction, which may necessitate additional restorative procedures such as dental implants or bridges to replace the missing tooth.</li>
            <br><br><br>
            <p><b>12. Timely Treatment: </b></p>
            <li>Early diagnosis and treatment are crucial. Delaying treatment can lead to more extensive dental problems, including the spread of infection to surrounding tissues.</li>
            <br><br><br>
            <p><b>13. Dental Anxiety: </b> </p>
            <li>Patients who experience dental anxiety or fear can discuss sedation options with their dentist or endodontist to make the procedure more comfortable.</li>
          </div>
          <div class="row">

            <p>Root canal treatment is an effective and commonly performed procedure that can save teeth and alleviate severe tooth pain caused by infection or damage to the pulp. If you suspect you may need a root canal, it’s essential to consult with a dental professional for a proper evaluation and treatment plan.</p>


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
