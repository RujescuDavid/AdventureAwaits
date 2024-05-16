<?php
$servername = "localhost"; // Change this if your database is on a different server
$username = "root";
$password = "";
$database = "proiect_colectiv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
  <title>AdventureAwaits - Mare</title>
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

  <style>
    .btn-add-to-cart {
        display: inline-block;
        background-color: #007bff; /* culoare albastră */
        color: #fff; /* culoare text alb */
        text-decoration: none;
        padding: 10px 20px; /* dimensiuni buton */
        border-radius: 20px; /* colțuri rotunjite */
         transition: background-color 0.3s ease;  /* efect de tranziție */
    }

    .btn-add-to-cart:hover {
        background-color: #0056b3; /* culoare albastră mai închisă la hover */
    }
  </style>

</head>
<body>

  <!--================ Header Menu Area start =================-->
  

  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
        <a class="navbar-brand logo_h" href="index_autentificat.php" style="font-size: bigger; font-weight: bold;">AdventureAwaits</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link" href="about.php">Despre Noi</a></li> 
              <li class="nav-item"><a class="nav-link" href="lista_bagaj.php">Lista</a></li>


              <li class="nav-item active submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Categorii</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="mare.php">Mare</a></li>
                  <li class="nav-item"><a class="nav-link" href="munte.php">Munte</a></li>
                  <li class="nav-item"><a class="nav-link" href="orase.php">Orașe</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <li class="nav-item"><a class="nav-link" href="recenzii.php">Recenzii</a></li>
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
        <h1>Mare</h1>
        <p>Descoperă plajele magnifice ale lumii cu pagina noastră de travel pentru destinații de pe litoral! Ghiduri detaliate și sfaturi practice pentru a te bucura de fiecare moment pe plajă.</p>
      </div>
    </div>
  </section>
  <!--================Hero Banner SM Area End =================-->



<!-- Blog Area -->
<section class="blog_area section-margin-large">
    <div class="container">
        <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
        <?php
        // Fetch data from the database
        $sql = $sql = "SELECT * FROM produse WHERE categorie = 'mare'";
        $result = $conn->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
              // Afișăm doar produsele din categoria "mare"
              echo "<article class='blog_item'>";
              echo "<div class='blog_item_img'>";
              echo "<img class='card-img rounded ' src='img/mare/" . $row["imagine"] . "' alt=''>";
              echo "<a href='#' class='blog_item_date'>";
              echo "<h3>" . $row["id"] . "</h3>"; // Assuming 'ID' is the primary key
              echo "</a>";
              echo "</div>";
              echo "<div class='blog_details'>";
              echo "<a class='d-inline-block' href='single-mare.php'>";
              echo "<h2>" . $row["nume"] . "</h2>";
              echo "</a>";
              echo "<p>" . $row["descriere"] . "</p>";
              echo "<p>" . $row["obiective"] . "</p>";
              echo "<p>" . $row["pret"] . "</p>";
              echo "<ul class='blog-info-link'>";
              echo "<li><a href='#'><i class='far fa-user'></i> Travel, Lifestyle</a></li>";
              echo "<li><a href='#'><i class='far fa-comments'></i> 03 Comments</a></li>";
              echo "</ul>";
              echo"<br></br>";
              echo "<form action='adauga_in_cos.php' method='post'>";
              echo "<input type='hidden' name='id' value='" . $row["id"] . "'/>";
              echo "<input type='hidden' name='nume' value='" . $row["nume"] . "'/>";
              echo "<input type='hidden' name='pret' value='" . $row["pret"] . "'/>";
              echo "<button type='submit' class='btn-add-to-cart'><i class='fas fa-shopping-cart'></i> Adaugă în coș</button>";
              echo "</form>";
              echo "</div>";
              echo "</article>";
          }
          

        } else {
            echo "0 results";
        }
        ?>
    </div>
</div>


            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <!-- Search Widget -->
                    <aside class="single_sidebar_widget search_widget">
                        <form id="searchForm">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" id="searchInput" placeholder="Caută cuvinte cheie">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>  
                          </form>
                          <button onclick="window.location.reload()" class="button button-hero mt-4" style="display: block; margin: auto;">Reîncarcă</button>
                    </aside>

                    <!-- Category Widget -->
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Restaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                        </ul>
                    </aside>

                    <!-- Recent Post Widget -->
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="single-mare.php">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="img/blog/popular-post/post2.jpg" alt="post">                              
                            <div class="media-body">
                                <a href="single-mare.php">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                    </aside>

                    <!-- Tag Cloud Widget -->
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li>
                                <a href="#">project</a>
                            </li>
                            <li>
                                <a href="#">love</a>
                            </li>
                        </ul>
                    </aside>

                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Area -->

<script>
document.addEventListener("DOMContentLoaded", function() {
    const searchForm = document.getElementById("searchForm");
    const searchInput = document.getElementById("searchInput");

    searchForm.addEventListener("submit", function(event) {
        event.preventDefault();
        const searchTerm = searchInput.value.trim();
        if (searchTerm !== "") {
            const regex = new RegExp(searchTerm, "gi");
            const textElements = document.querySelectorAll("p, h1, h2, h3, h4, h5, h6, span");
            let found = false;
            textElements.forEach(element => {
                if (element.innerText.match(regex)) {
                    const content = element.innerHTML;
                    const highlightedContent = content.replace(regex, match => `<span style="background-color: yellow">${match}</span>`);
                    element.innerHTML = highlightedContent;
                    found = true;
                }
            });
            if (!found) {
                alert(`Nu au fost găsite cuvinte ca "${searchTerm}"`);
            }
        } else {
            alert("Introduceți cuvinte valabile!");
        }
    });
});

</script>



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
  <!-- <script src="js/countdown.js"></script> -->
  <script src="js/jquery.magnific-popup.min.js"></script>	
  <script src="js/main.js"></script>
</body>
</html>