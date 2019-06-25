@extends('pagrindas')
@section('content')

                                    <!-- UŽRAŠAS "MEET OUR TEAM" IR LINIJA PO UŽRAŠU-->
         <section class="showcase">
            <h2>
               Meet Our Team
            </h2>
            <img src="{{asset('img/section2-line.svg')}}" alt="undeline">

                                    <!-- TRIJŲ ŽMONIŲ NUOTRAUKOS - antra dalis -->
            <div class="row">

                <div class="box">
                <a href="{{route('DennisKim')}}" >
                        <img src="{{asset('img/Dennis_Kim.jpg')}}" alt="Kim">
                        <h3>
                           Dennis Kim
                        </h3>
                    </a>
                    <p>In the tumultuous business of cutting-in and attending to a whale,
                        there is much running backwards and forwards among the crew.</p>
                </div>

                <div class="box">
                <a href="{{route('SaraMcCoy')}}" >
                   
                       <img src="{{asset('img/Sara_McCoy.jpg')}}" alt="Sara">
                     </a>
                        <h3>
                           Sara McCoy
                        </h3>
                    </a>
                    <p>In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew.</p>
                </div>

                <div class="box">
                <a href="{{route('EmilyPorter')}}" >

                       <img src="{{asset('img/Emily_Porter.jpg')}}" alt="Emily">
                     </a>
                        <h3>
                           Emily Porter
                        </h3>
                    </a>
                    <p>In the tumultuous business of cutting-in and attending to a whale, there is much running backwards and forwards among the crew.</p>
                </div>

            </div>
         </section>
                                          <!-- TREČIA DALIS -->
         <section class="showcase2">
            <div class="row">
                                          <!-- ŠEŠIOS NUOTRAUKOS EILĖJE -->
               <a href="#">
                   <img class="left-arrow" src="{{asset('img/Left Arrow.png')}}" alt="left arrow" style="height: 60px; width: 60px;">
               </a>

               <a href="#">
                  <div class="showcase2-card">
                     <img class="select" src="{{asset('img/Image 1.jpg')}}" alt="pavesine">
                  </div>
               </a>

               <a href="#">
                  <div class="showcase2-card">
                     <img class="select" width=50% src="{{asset('img/Image 2 Mouse Over.jpg')}}" alt="fonas">
                  </div>
               </a>

               <a href="#">
                  <div class="showcase2-card">
                     <img class="select" width=50% src="{{asset('img/Image 3.jpg')}}" alt="gatve">
                  </div>
               </a>

               <a href="#">
                  <div class="showcase2-card">
                     <img class="select" width=50% src="{{asset('img/Image 4.jpg')}}" alt="centras">
                  </div>
               </a>

               <a href="#">
                     <img class="right-arrow" src="{{asset('img/Right Arrow.png')}}" alt="right arrow" style="height: 60px; width: 60px;">
               </a>

                                       <!-- INSTAGRAM ICONA IR UŽRAŠAS "FOLLOW US ON INSTAGRAM" -->
            </div>
            <a href="#" class="wrapper btn">
               <i class="fab fa-instagram">
               </i>
                  <p>
                     FOLLOW US ON INSTAGRAM
                  </p>
            </a>
        </section>
        <!-- KETVIRTA DALIS -->
        <section class="showcase3">
            <a href="#">
               <h2>
                  Contact Us
               </h2>
            </a>

            <img img class="undeline" src="{{asset('img\About Us Undderline.png')}}" alt="undeline">

               <div class="row">
                  <div class="showcase3-card">
                                           <!-- VARDAS, EMAIL'AS, MESSAGE IR ŽEMĖLAPIS -->
                     <form class="myForm">
                        <input id="mrg" type="text" id="fullname" name="fullname" placeholder="Full Name" style="height: 4.2857rem; width: 32.21rem;">
                        <input type="email" id="email" name="email" placeholder="contact@email.com">
                        <textarea name="subject" placeholder="Message"></textarea>
                        <a class="send_btn" href="#">
                           <strong>
                              Send
                           </strong>
                        </a>
                     </form>
                  </div>
                                                    <!--  ŽEMĖLAPIS -->
                  <div class="showcase3-card">
                     <div class="mapouter">
                        <div class="gmap_canvas">
                           <iframe width="451" height="280" id="gmap_canvas" src="https://maps.google.com/maps?q=lithuania%20vilnius%20zirmunu%2070&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0">
                           </iframe>
                              <a href="https://www.crocothemes.net">
                              </a>
                        </div>
                        <style>
                            .mapouter
                              {
                                text-align: right;
                                height: 280px;
                                width: 451px;
                              }
                            .gmap_canvas
                              {
                                overflow: hidden;
                                background: none !important;
                                height: 280px;
                                width: 451px;
                              }
                        </style>
                     </div>
                                      <!-- UŽRAŠAS PO ŽEMĖLAPIU -->
                     <div>
                        <p>
                           811 7th Avenue 53rd Street<br> New York, 10019, United States
                        </p>
                     </div>

                  </div>
                                      <!-- FOOTERIO NAVIGACIJA PENKTA DALIS -->
            </div>
         </section>

      @endsection    