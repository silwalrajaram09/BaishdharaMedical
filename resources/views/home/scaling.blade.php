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
                <p class="breadcrumbs" data-scrollax=" properties: { translateY: '70%', opacity: 1.6}"><span class="mr-2"><a href="index.html">Home</a></span>  <span>Services</span>  <span>Scaling and Polishing</span></p>
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
              <h2 class="mb-2">Scaling and Polishing</h2>

            </div>
            <p>Scaling and polishing are essential dental procedures performed by dental hygienists or dentists to maintain oral health and prevent dental problems. Here are the most important points to know about scaling and polishing:</p>
            <p></p>



            <p><b>1. Purpose of Scaling and Polishing:</b></p>
            <li>
                Scaling and polishing are preventive dental treatments aimed at removing dental plaque, tartar (calculus), and surface stains from teeth. These procedures help maintain oral health and prevent gum disease and tooth decay.</p>

            </li>

            <p><b>2. Dental Plaque and Tartar: </b></p>
            <li> Dental plaque is a soft, sticky film of bacteria that forms on teeth. If not removed, plaque can harden into tartar, a hard, calcified deposit that can only be removed through scaling.</li>
            <br><br><br>
            <p><b>3. Scaling:</b></p>
            <li>
                Scaling involves the use of special dental instruments to gently remove plaque and tartar from the tooth’s surface, including below the gumline. It helps prevent gum inflammation and infection.</li>
            <br><br><br>
            <p><b>4. Polishing:</b></p>
            <li>After scaling, teeth are polished using a rotating brush or rubber cup attached to a polishing tool. A mild abrasive toothpaste is used to remove surface stains and create a smooth, polished surface.</li>
            <br><br><br>
            <p><b>5. Frequency: </b></p>
            <li>It is recommended to have scaling and polishing done regularly, typically every six months during routine dental check-ups. However, the frequency may vary based on an individual’s oral health needs.</li>
            <br><br><br>
            <p><b>6. Painless Procedure: </b></p>
            <li>Scaling and polishing are typically painless procedures. Local anesthesia is not required unless there is a specific need for deeper cleaning, such as during periodontal therapy.</li>
            <br><br><br>
            <p><b>7. Gum Health: </b></p>
            <li>Scaling helps improve gum health by removing plaque and tartar that can lead to gum inflammation (gingivitis) or more severe gum disease (periodontitis).</li>
            <br><br><br>
            <p><b>8. Fresh Breath: </b></p>
            <li>Removal of plaque and tartar can significantly improve breath freshness by eliminating odor-causing bacteria.</li>
            <br><br>
            <p><b>9. Smooth and Clean Teeth:</b></p>
            <li>Polishing leaves teeth feeling smooth and clean while enhancing their appearance by removing surface stains.</li>
            <br><br>
            <p><b>10. Preventive Care: </b></p>
            <li> Regular scaling and polishing are essential components of preventive dental care, helping to avoid more extensive and costly dental treatments in the future.</li>
            <br><br><br>
            <p><b>11. Customized Treatment: </b></p>
            <li>The frequency and need for scaling and polishing may vary based on an individual’s oral health condition. Your dentist or dental hygienist will determine the appropriate treatment plan for you.</li>
            <br><br><br>
            <p><b>12. Home Care: </b></p>
            <li>Maintaining good oral hygiene practices at home, such as brushing twice a day, flossing, and using mouthwash, complements the benefits of scaling and polishing.</li>
            <br><br><br>
            <p><b>13. Oral Health Education: </b> </p>
            <li>Dental professionals often provide oral health education during these visits, offering guidance on proper brushing and flossing techniques and dietary choices to support oral health.</li>


          </div>
          <div class="row">

            <p>Scaling and polishing are routine dental procedures that play a vital role in preserving oral health, preventing dental issues, and promoting a bright and healthy smile. Regular dental check-ups and cleanings are crucial components of maintaining good oral hygiene.</p>


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
