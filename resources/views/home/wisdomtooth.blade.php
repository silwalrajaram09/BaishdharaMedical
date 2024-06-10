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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Wisdom Tooth Extraction</span></p>
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
              <h2 class="mb-2">Wisdom Tooth Extraction</h2>

            </div>
            <p>Wisdom tooth extraction is a common dental procedure performed to remove the third molars, also known as wisdom teeth. Here are the most important points to know about wisdom tooth extraction:</p>
            <p></p>



            <p><b>1. Purpose of Wisdom Tooth Extraction:</b></p>
            <li>
                Wisdom teeth often become impacted or cause issues due to limited space in the mouth. Extraction is performed to prevent pain, infection, damage to neighboring teeth, and other dental problems.</p>

            </li>

            <p><b>2. Number and Location: </b></p>
            <li>Most individuals have four wisdom teeth, one in each quadrant of the mouth. Wisdom teeth are located at the back of the mouth.</li>
            <br><br>
            <p><b>3. Indications for Extraction:</b></p>
            <li>
                Wisdom teeth may need to be extracted if they are impacted (unable to fully emerge), causing pain or discomfort, or if they pose a risk to adjacent teeth or overall oral health.</li>
            <br><br><br>
            <p><b>4. Assessment and X-rays:</b></p>
            <li>Your dentist or oral surgeon will assess the positioning and condition of your wisdom teeth using X-rays to determine whether extraction is necessary.</li>
            <br><br>
            <p><b>5. Timing: </b></p>
            <li>Wisdom tooth extraction is often recommended during late adolescence or early adulthood when the teeth have partially erupted but before they cause significant issues.</li>
            <br><br><br>
            <p><b>6. Local Anesthesia and Sedation: </b></p>
            <li>The procedure is typically performed under local anesthesia, and additional sedation options, such as nitrous oxide (laughing gas) or oral sedatives, may be offered to help patients relax.</li>
            <br><br><br>
            <p><b>7. Types of Impaction: </b></p>
            <li>Wisdom teeth can be partially or fully impacted. Partial impaction means the tooth has partially erupted, while full impaction means it remains entirely below the gumline.</li>
            <br><br><br>
            <p><b>8. Surgical Extraction: </b></p>
            <li>Fully impacted wisdom teeth often require surgical extraction, which involves making an incision in the gum and possibly removing a portion of bone to access and remove the tooth.</li>
            <br><br><br>
            <p><b>9. Post-Operative Care:</b></p>
            <li>After extraction, patients receive post-operative instructions, including guidelines for managing pain, swelling, bleeding, and infection risk. Proper oral hygiene and diet recommendations are also provided.</li>
            <br><br><br>
            <p><b>10. Recovery Time: </b></p>
            <li> Most patients can resume normal activities within a few days to a week after the procedure. Full recovery may take a few weeks.</li>
            <br><br>
            <p><b>11. Complications: </b></p>
            <li>While complications are rare, potential risks include infection, dry socket (a painful condition that occurs when the blood clot is dislodged from the extraction site), nerve damage, and swelling.</li>
            <br><br><br>
            <p><b>12. Pain Management: </b></p>
            <li>Over-the-counter or prescription pain medications may be prescribed to manage post-operative discomfort.</li>
            <br><br>
            <p><b>13. Diet Restrictions: </b> </p>
            <li>Soft and cool foods are recommended in the days following extraction to avoid irritation or injury to the surgical sites.</li>
            <br><br>
            <p><b>14. Follow-Up Appointments: </b> </p>
            <li>Patients typically have follow-up appointments to monitor healing and ensure there are no complications.</li>
            <br><br>
            <p><b>15. Alternatives to Extraction: </b> </p>
            <li>In some cases, if wisdom teeth are properly aligned, fully erupted, and can be maintained with good oral hygiene, extraction may not be necessary.</li>


          </div>
          <div class="row">

            <p>Wisdom tooth extraction is a common dental procedure that can prevent potential oral health problems and alleviate pain and discomfort associated with impacted or problematic wisdom teeth. It is essential to follow your dentist or oral surgeon’s recommendations and post-operative care instructions for a smooth and successful recovery.

            </p>


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
