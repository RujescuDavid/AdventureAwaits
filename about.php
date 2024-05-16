<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Utilizatorul este autentificat, poți afișa mesajul de bun venit și alte informații relevante
    echo "Bun venit, " . $_SESSION['email'] . "!";
} else {
    // Utilizatorul nu este autentificat, poți afișa un mesaj sau redirecționa către pagina de autentificare
    echo "Bună! Te rugăm să te autentifici pentru a accesa această pagină.";
    // Poți adăuga și un link către pagina de autentificare
    echo '<a href="login.php">Autentificare</a>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AdventureAwaits - Despre Noi</title>
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
<body>

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
              <li class="nav-item active"><a class="nav-link" href="about.php">Despre Noi</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.php">Packages</a>
              <li class="nav-item"><a class="nav-link" href="lista_bagaj.php">Lista</a></li>


              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categorii</a>
                <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="mare.php">Munte</a></li>
                  <li class="nav-item"><a class="nav-link" href="munte.php">Mare</a></li>
                  <li class="nav-item"><a class="nav-link" href="orase.php">Orașe</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="recenzii.php">Recenzii</a></li>
            </ul>

            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
              <a class="button" href="logout.php">Log Out</a>
            </div>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->



  <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Despre Noi</h1>
        <p>Te invităm să ne însoțești în călătoria noastră  <br class="d-none d-xl-block"> și să ne cunoaștem împreună.</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->


 <!--================About Area Start =================-->
 <section class="section-padding magic-ball magic-ball-sm magic-ball-about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
        <div class="about-img">
          <img class="img-fluid" src="img/home/about-img.png" alt="">
        </div>
      </div>
      <div class="col-lg-5 col-md-6 align-self-center about-content">
        <h2>Cunoaște Echipa Noastră</h2>
        <p>Suntem o echipă formată din trei tineri, care au început o călătorie plină de speranță și pasiune pentru a-și urma visul de a crea un site web. Ne-am unit forțele și creativitatea pentru a aduce la viață ideile noastre și pentru a oferi o experiență online memorabilă celor care ne vizitează platforma. Cu fiecare pas înainte, suntem determinați să depășim obstacolele și să ne îndeplinim scopul, aducând în lumea digitală ceea ce ne definește și ne inspiră.</p>
      </div>
    </div>
  </div>
</section>
<!--================About Area End =================-->


<!--================Testimonial section Start =================-->
<section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
  <div class="container">
    <div class="section-intro text-center pb-90px">
      <img class="section-intro-img" src="img/home/section-icon.png" alt="">
      <h2>Ce Spun Membrii Echipei Noastre</h2>
      <p>Membrii tineri ai echipei noastre își împărtășesc gândurile și experiențele.</p>
    </div>


    <div class="owl-carousel owl-theme testimonial pb-xl-5">
      <div class="testimonial__item">
        <div class="row">
          <div class="col-md-3 col-lg-2 align-self-center">
            <div class="testimonial__img">
              <img class="card-img rounded-0" src="img/testimonial/Alecsandra.png" alt="">
            </div>
          </div>
          <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
              <h3>Alecsandra Păun</h3>
              <p>Co-fondator, AdventureAwaits</p>
              <p class="testimonial__i">Începând această călătorie alături de cei doi colegi minunați ai mei a fost o experiență incredibilă. Suntem hotărâți să ne îndeplinim visurile.</p>
              <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial__item">
        <div class="row">
          <div class="col-md-3 col-lg-2 align-self-center">
            <div class="testimonial__img">
              <img class="card-img rounded-0" src="img/testimonial/Alexia.png" alt="">
            </div>
          </div>
          <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
              <h3>Alexia Șerban</h3>
              <p>Co-fondator, AdventureAwaits</p>
              <p class="testimonial__i">Lucrând alături de echipa mea, mă simt inspirată și motivată în fiecare zi. Împreună, credem că putem realiza orice.</p>
              <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
            </div>
          </div>
        </div>
      </div>
      <div class="testimonial__item">
        <div class="row">
          <div class="col-md-3 col-lg-2 align-self-center">
            <div class="testimonial__img">
              <img class="card-img rounded-0" src="img/testimonial/David.png" alt="">
            </div>
          </div>
          <div class="col-md-9 col-lg-10">
            <div class="testimonial__content mt-3 mt-sm-0">
              <h3>Rujescu David</h3>
              <p>Co-fondator, AdventureAwaits</p>
              <p class="testimonial__i">Ca echipă, suntem hotărâți să ne depășim limitele și să creăm ceva semnificativ. Călătoria noastră abia începe, și suntem entuziasmați pentru ceea ce ne rezervă viitorul.</p>
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
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>