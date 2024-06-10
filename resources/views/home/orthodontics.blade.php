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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Orthodontics</span></p>
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
              <h2 class="mb-2">Orthodontics</h2>

            </div>
            <p>Orthodontics is a specialized field of dentistry that focuses on the diagnosis, prevention, and correction of misaligned teeth and jaws. Here are the most important points to know about orthodontics:</p>
            <p></p>



            <p><b>1. Purpose of Orthodontics:</b></p>
            <li>
                Orthodontic treatment aims to correct various dental and jaw alignment issues to improve both the appearance and function of the teeth and bite.</p>

            </li>

            <p><b>2. Orthodontist vs. Dentist: </b></p>
            <li> Orthodontists are dental specialists who receive additional education and training in orthodontics after completing dental school. They are experts in diagnosing and treating orthodontic problems.</li>
            <br><br><br>
            <p><b>3. Common Orthodontic Issues:</b></p>
            <li>Orthodontic treatment is used to address issues such as crooked teeth, overcrowding, overbites, underbites, crossbites, open bites, and malocclusions (misalignments of the upper and lower teeth).</li>
            <br><br><br>
            <p><b>4. Orthodontic Appliances:</b></p>
            <li> Various orthodontic appliances are used to correct misalignments, including traditional braces, clear aligners (e.g., Invisalign), retainers, headgear, and functional appliances.</li>
            <br><br><br>
            <p><b>5. Timing of Treatment: </b></p>
            <li>Orthodontic treatment is most commonly initiated during childhood or adolescence when the teeth and jaws are still developing. However, it can also be performed in adulthood.</li>
            <br><br><br>
            <p><b>6. Assessment and Treatment Planning: </b></p>
            <li>Orthodontists conduct thorough evaluations, including X-rays, impressions, and clinical examinations, to develop personalized treatment plans tailored to each patient’s needs.</li>
            <br><br><br>
            <p><b>7. Duration of Treatment: </b></p>
            <li>The length of orthodontic treatment varies depending on the complexity of the case. It can range from several months to a few years.</li>
            <br><br>
            <p><b>8. Pain and Discomfort: </b></p>
            <li>Patients may experience some discomfort or soreness when braces or aligners are adjusted. Over-the-counter pain relievers can help alleviate this temporary discomfort.</li>
            <br><br><br>
            <p><b>9. Maintenance and Hygiene: </b></p>
            <li>Proper oral hygiene is crucial during orthodontic treatment to prevent tooth decay and gum disease. Special care is needed to clean around braces or other appliances.</li>
            <br><br><br>
            <p><b>10. Retainers: </b></p>
            <li> After active treatment, patients often wear retainers to maintain the corrected alignment of their teeth. Regular retainer use is essential to prevent relapse.</li>
            <br><br>
            <p><b>11. Aesthetic Options: </b></p>
            <li>Clear aligners like Invisalign offer a discreet alternative to traditional braces, making orthodontic treatment less noticeable.</li>
            <br><br>
            <p><b>12. Functional Improvement: </b></p>
            <li>Orthodontic treatment not only enhances the appearance of the smile but can also improve chewing, speech, and overall oral function.</li>
            <br><br>
            <p><b>13. Orthognathic Surgery: </b> </p>
            <li>In some cases of severe jaw misalignment, orthodontic treatment may be combined with orthognathic surgery to achieve optimal results.</li>
            <br><br>
            <p><b>14. Cost Considerations: </b> </p>
            <li>The cost of orthodontic treatment varies depending on the complexity of the case, the type of appliances used, and the duration of treatment. Dental insurance may cover a portion of the cost.</li>
            <br><br><br>
            <p><b>15. Long-Term Benefits: </b> </p>
            <li>Successful orthodontic treatment can lead to a healthier mouth, improved self-esteem, and a more aesthetically pleasing smile.</li>
            <br><br>
            <p><b>16. Consultation: </b> </p>
            <li>If you or your child has concerns about the alignment of the teeth or jaws, schedule a consultation with an orthodontist to discuss treatment options and determine the best course of action.</li>

          </div>
          <div class="row">

            <p>Orthodontic treatment offers numerous benefits beyond aesthetics, including improved oral health and function. If you or a family member require orthodontic care, seeking consultation and treatment from a qualified orthodontist is essential to achieve the best possible results.</p>


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
