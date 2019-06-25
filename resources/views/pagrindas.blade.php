<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>RED PROJEKTAS </title>
    <link rel="stylesheet" href="{{asset('css/REDprojektas.css')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">

    <meta name="author" content="none">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Sintony" rel="stylesheet">
</head>

<body>

   <div class="container">
      <header>
         <div id="nav-bar">
                                    <!-- LOGOTIPAS KAIRĖJE, VIRŠUJE -->
            <a href="#">
               <img class="logo" src="{{asset('img/logo.png')}}" alt="Logo">
            </a>

               <nav class="navigation">
                  <ul>
                                    <!-- NAVIGACIJOS MENIU - HOME -->
                     <li>
                        <a href="{{route('home')}}" img src="{{asset('figma3.html')}}">
                           HOME
                        </a>
                     </li>
                                    <!-- NAVIGACIJOS MENIU - ABOUT US -->
                     <li>
                        <a href="{{route('about_us')}}" img src="{{asset('about.html')}}">
                           ABOUT US
                        </a>
                     </li>
                                    <!-- NAVIGACIJOS MENIU - SOCIAL -->
                     <li>
                     <a href="{{route('social')}}" img src="{{asset('services.html')}}">
                           SOCIAL
                        </a>
                     </li>
                                    <!-- NAVIGACIJOS MENIU - CONTACT -->
                     <li>
                     <a href="{{route('contact')}}" img src="{{asset('contact.html')}}">
                           CONTACT
                        </a>
                     </li>

                  </ul>
               </nav>
            </div>
                              <!-- UZRAŠAS SINCE PER VIDURĮ IR APATINĖ ARROW -->
            <img class="since" src="{{asset('img/Tagline.png')}}" alt="Since 1978">
                                    
                                    <!-- APATINIS "ARROW DOWN" SIMBOLIS -->
            <a href="#">
               <img class="head-img" src="{{asset('img/head-arrow.png')}}" alt="arrow down">
            </a>

      </header>

      @yield('content')
      

      <section class="showcase4">

            <div class="footer-nav">
                <ul>
                    <a href="#">
                        <li>
                           Home
                        </li>
                    </a>
                    <a href="#">
                        <li>
                           About Us
                        </li>
                    </a>
                    <a href="#">
                       <img class="logo" src="{{asset('img/Footer Logo.svg')}}" alt="Logo">
                     </a>
                    <a href="#">
                        <li>
                           Social
                        </li>
                    </a>
                    <a href="#">
                        <li>
                           Contact
                        </li>
                    </a>
                </ul>
            </div>
                                         <!-- FOOTERIO ICO'NOS -->
            <div class="icon">
                <a href="#">
                   <img class="icon" src="img/Facebook.png" alt="icon">
                  </a>
                <a href="#">
                   <img class="icon" src="img/Twitter.png" alt="icon">
                  </a>
                <a href="#">
                   <img class="icon" src="img/Instagram.png" alt="icon">
                  </a>
                <a href="#">
                   <img class="icon" src="img/Pinterest.png" alt="icon">
                  </a>
            </div>

                                        <!-- PASKUTINĖ EILUTĖ -->
         </section>
      <div id="footer">
            <p>
               Copyright © 2015.All Right Reserved
            </p>
      </footer>
      </div>
</body>

</html>
