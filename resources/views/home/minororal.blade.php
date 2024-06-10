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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Minor Oral Surgery</span></p>
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
              <h2 class="mb-2">Minor Oral Surgery</h2>

            </div>
            <p>Common minor oral surgery procedures encompass a range of dental surgeries that address various oral health issues. Here are some of the most common minor oral surgery procedures:</p>
            <p></p>



            <p><b>1. Tooth Extraction:</b></p>
            <li>
                Removal of damaged, decayed, impacted, or crowded teeth. Wisdom teeth extraction (third molars) is a frequently performed type of tooth extraction.</p>

            </li>

            <p><b>2. Dental Implant Placement: </b></p>
            <li> Surgical placement of dental implants into the jawbone to serve as artificial tooth roots for prosthetic teeth. This procedure is used to replace missing teeth.</li>
            <br><br><br>
            <p><b>3. Biopsy:</b></p>
            <li>Surgical removal and analysis of tissue samples from the mouth to diagnose oral lesions, tumors, or suspicious growths. Biopsies help determine whether a condition is benign or cancerous.</li>
            <br><br><br>
            <p><b>4. Gum Surgery (Gingivectomy or Gingivoplasty):</b></p>
            <li>Surgical procedures to reshape or remove excess gum tissue, often used to treat conditions like gum disease or to improve the appearance of the gum line.</li>
            <br><br><br>
            <p><b>5. Apicoectomy: </b></p>
            <li>Removal of the tip (apex) of a tooth’s root and surrounding infected tissue when a root canal treatment fails to resolve an infection.</li>
            <br><br>
            <p><b>6. Frenectomy: </b></p>
            <li>Removal or modification of a frenulum (a fold of tissue), such as the lingual frenulum (beneath the tongue) or labial frenulum (between the upper lip and gums) to correct issues like tongue-tie or lip-tie.</li>
            <br><br><br>
            <p><b>7. Pre-Prosthetic Surgery: </b></p>
            <li>Procedures to prepare the mouth for the placement of dentures or other dental prosthetics. This may involve smoothing bone surfaces, removing excess tissue, or adjusting the bone structure.</li>
            <br><br><br>
            <p><b>8. Orthodontic Tooth Exposure: </b></p>
            <li>Surgery to expose and reposition a impacted tooth, such as a canine (cuspid), so that it can be guided into its proper position by orthodontic treatment.</li>
            <br><br><br>
            <p><b>9. Sinus Lift (Sinus Augmentation):</b></p>
            <li>A surgical procedure that raises the sinus membrane and adds bone graft material to the upper jaw to create a more stable foundation for dental implants in the posterior (back) region.</li>
            <br><br><br>
            <p><b>10. Cyst Removal: </b></p>
            <li> Surgical removal of cysts or benign growths within the jawbone or soft tissues of the mouth.</li>
            <br><br>
            <p><b>11. Alveoloplasty: </b></p>
            <li>Reshaping or smoothing of the bony ridges in the upper or lower jaw after tooth extraction to prepare the area for dental prosthetics or to improve the fit of dentures.</li>
            <br><br><br>
            <p><b>12. Oral and Maxillofacial Trauma Repair: </b></p>
            <li>Surgical repair of facial injuries, fractures, and lacerations, often involving the jaw, facial bones, and soft tissues.</li>



          </div>
          <div class="row">

            <p>These are some of the common minor oral surgery procedures, but the specific treatment needed depends on an individual’s oral health condition. Patients should consult with an oral surgeon or dentist for a thorough evaluation and appropriate recommendations.</p>


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
