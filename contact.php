<?php
session_start();

// Verificăm dacă utilizatorul este autentificat
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Utilizatorul este autentificat, poți afișa mesajul de bun venit și alte informații relevante
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
  <title>AdventureAwaits - Contact</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
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
              <li class="nav-item"><a class="nav-link" href="about.php">Despre Noi</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.php">Packages</a>
              <li class="nav-item"><a class="nav-link" href="lista_bagaj.php">Lista</a></li>


              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categorii</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="mare.php">Mare</a></li>
                  <li class="nav-item"><a class="nav-link" href="munte.php">Munte</a></li>
                  <li class="nav-item"><a class="nav-link" href="orase.php">Orașe</a></li>
                </ul>
							</li>
              <li class="nav-item active"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="recenzii_autentificat.php">Recenzii</a></li>
              <li class="nav-item"><a class="nav-link" href="cos.php">Cosul Meu</a></li>              

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
        <h1>Contactează-ne</h1>
        <p>Rămâi conectat cu noi, indiferent de locație sau oră.</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->



  <!-- ================ contact section start ================= -->
 <section class="section-margin">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">

      <div id="map" style="height: 480px;"></div>
          <script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY_HERE&callback=console.debug&libraries=maps,marker&v=beta">
          </script>
          <gmp-map center="45.74708938598633,21.231489181518555" zoom="14" map-id="DEMO_MAP_ID">
            <gmp-advanced-marker position="45.74708938598633,21.231489181518555" title="My location"></gmp-advanced-marker>
          </gmp-map>  
      </div>

      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Spune-ne care sunt problemele tale.</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="contact_process.php" method="post" id="contact.php" novalidate="novalidate">
            <div class="row">
              
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nume" id="name" type="text" placeholder="Numele Tău">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" placeholder="Emailul Tău">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subiect" id="subject" type="text" placeholder="Subiectul Discuției">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="mesaj" id="message" cols="30" rows="9" placeholder="Mesajul Tău"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm">Trimite Mesaj</button>
            </div>
          </form>


        </div>

        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Timis, Romania.</h3>
              <p>Timisoara, 300013</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3><a href="tel:454545654">+40 771 234 567</a></h3>
              <p>De Luni pana Vineri de la 9:00 la 17:00</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:AdventureAwaits@gmail.com">AdventureAwaits@gmail.com</a></h3>
              <p>Ia legătura cu noi oricând!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->





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
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>	
  <script src="js/main.js"></script>
</body>
</html>