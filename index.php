<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AdventureAwaits - Home</title>
  <link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php" style="font-size: bigger; font-weight: bold;">AdventureAwaits</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="login.php">Despre Noi</a></li> 
              <li class="nav-item"><a class="nav-link" href="login.php">Packages</a>
              <li class="nav-item"><a class="nav-link" href="lista_bagaj.php">Lista</a></li>


              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categorii</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.php">Mare</a></li>
                  <li class="nav-item"><a class="nav-link" href="login.php">Munte</a></li>
                  <li class="nav-item"><a class="nav-link" href="login.php">Orașe</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="login.php">Contact</a></li>
              <!-- Adăugăm butonul pentru recenzii -->
              <li class="nav-item"><a class="nav-link" href="recenzii.php">Recenzii</a></li>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="login.php">Începe Acum</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->


  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">

      <div class="row align-items-center text-center text-md-left">
        <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
          <h1>Călătorește pentru a te descoperi</h1>
          <p>Imbrățișează cu curaj aventura unei călătorii pline de mister și farmec, unde fiecare răsărit de soare dezvăluie o nouă poveste și fiecare întâlnire îți dezvăluie noi straturi ale sinelui tău, adânc ascunse sub valurile vieții de zi cu zi.</p>
          <a class="button button-hero mt-4" href="login.php">Începe Acum</a>
        </div>
        <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
          <img class="img-fluid" src="img/home/hero-img.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <!--================Hero Banner Area End =================-->


  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>Serviciile noastre</h2>
        <p></p>
      </div>

      <div class="row">
      <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
  <button class="service-button" onclick="window.location.href='mare.php'">
    <div class="service-card text-center">
      <div class="service-card-img">
        <img class="img-fluid" src="img/home/service1.png" alt="">
      </div>
      <div class="service-card-body">
        <h3>Vacanțe la Mare</h3>
        <p>Încântătoarele vacanțe la mare te îmbie cu nisip fin, ape cristaline și raze de soare, oferindu-ți o evadare perfectă din agitația cotidiană într-un paradis de relaxare și bucurie.</p>
      </div>
    </div>
  </button>
</div>



<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
  <button class="service-button" onclick="window.location.href='munte.php'">
    <div class="service-card text-center">
      <div class="service-card-img">
        <img class="img-fluid" src="img/home/service2.png" alt="">
      </div>
      <div class="service-card-body">
        <h3>Vacanțe la Munte</h3>
        <p>Vacanțele la munte te conduc într-o călătorie fascinantă prin vârfuri împodobite cu zăpadă, păduri înmiresmate și aer proaspăt. Aici vei găsi liniștea și aventura.</p>
      </div>
    </div>
  </button>
</div>

<div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
  <button class="service-button" onclick="window.location.href='orase.php'">
    <div class="service-card text-center">
      <div class="service-card-img">
        <img class="img-fluid" src="img/home/service3.png" alt="">
      </div>
      <div class="service-card-body">
        <h3>Vacanțe în Orașe</h3>
        <p>Vacanțele în orașe te invită să explorezi labirintul străzilor animate, să te lași captivat de arhitectura impresionantă și să te hrănești cu pulsul vibrant al vieții urbane.</p>
      </div>
    </div>
  </button>
</div>
      </div>
    </div>
  </section>
  <!--================Service Area End =================-->


  <!--================About Area Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="img/home/about-img.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Explorarea este<br class="d-none d-xl-block"> cu adevărat esența <br class="d-none d-xl-block"> spiritului uman. </h2>
          <p>Explorarea este esența spiritului uman, căutând mereu, descoperind și învățând.</p>
          <a class="button" href="#">Află mai multe</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->

  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour1.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="tour-content">
                <h2>Aici veți găsi sugestiile săptămânii.</h2>
                <p>Nu rata ocazia de a face o rezervare <br class="d-none d-xl-block">înainte să se ocupe toate locurile disponibile.</p>
              </div>
            </div>
          </div>

          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour2.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour3.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour4.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Tour section End =================-->


  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>Recenziile clienților noștri</h2>
      </div>


      <div class="owl-carousel owl-theme testimonial pb-xl-5">
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/testimonial4.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Elena Radu</h3>
                <p>Edito de continut digital</p>
                <p class="testimonial__i">Am folosit acest site de travel pentru a organiza vacanța mea și am fost foarte impresionat de serviciile lor. Interfața site-ului este ușor de folosit, iar procesul de rezervare a fost rapid și fără bătăi de cap. Am găsit oferte excelente și am avut o experiență de călătorie minunată. Cu siguranță voi folosi din nou acest site pentru următoarele mele vacanțe</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/testimonial1.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Andrei Ionescu</h3>
                <p>Consultant Financiar</p>
                <p class="testimonial__i">Recomand cu căldură acest site de travel! Am călătorit recent într-o destinație exotică și am folosit acest site pentru a găsi cele mai bune oferte de zbor și cazare. Am fost foarte mulțumit de serviciile lor și de atenția la detalii. Echipa lor de asistență clienți a fost deosebit de utilă și receptivă la întrebările mele. Cu siguranță voi reveni să îmi planific următoarea escapadă folosind acest site.</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/testimonial5.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Ana Popescu</h3>
                <p>Manager de Marketing</p>
                <p class="testimonial__i">Experiența mea cu acest site de travel a fost excepțională! Am căutat mult timp o destinație de vacanță potrivită pentru familia mea și am găsit tot ce căutam pe acest site. Am apreciat în mod deosebit opțiunile variate de hoteluri și activități disponibile. Procesul de rezervare a fost simplu și fără complicații, iar călătoria noastră a fost o adevărată încântare. Mulțumim acestui site pentru o vacanță de neuitat!</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Testimonial section End =================-->


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Despre noi</h6>
            <p>
            Suntem o companie orientată către crearea unei experiențe de călătorie mai ușoare și mai plăcute pentru clienții noștri, prin furnizarea de servicii și soluții care să răspundă nevoilor lor în mod eficient și convenabil.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Scurtături</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="index.php">Acasă</a></li>
                  <li><a href="about.php">Despre Noi</a></li>
                  <li><a href="">Categorii</a></li>
                  <li><a href="contact.php">Contact</a></li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  
                </ul>
              </div>										
            </div>							
          </div>
        </div>							
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Abonare</h6>
            <p>
            Înscrie-te la serviciile noastre pentru a primi cele mai recente oferte de călătorii.					
            </p>								
            <div id="mc_embed_signup">
              <form target="_blank" action="https://e-uvt.us22.list-manage.com/subscribe/post?u=b06a01da2a74c0fc7446fa472&amp;id=e2bc129559&amp;v_id=5&amp;f_id=0093c1e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Addresă de Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                </div>									
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>						
      </div>

      <div class="footer-bottom">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>