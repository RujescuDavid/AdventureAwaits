<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AdventureAwaits - Recenzii</title>
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .review-container {
            width: 80%;
            margin: 2rem auto;
            padding: 1rem;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .review {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #e0e0e0;
        }
        .review h2 {
            margin: 0 0 0.5rem 0;
            font-size: 1.5rem;
            color: #333;
        }
        .review p {
            margin: 0.5rem 0;
            color: #666;
        }
        .review .meta {
            font-size: 0.9rem;
            color: #999;
        }
        .btn-add-review {
            display: block;
            width: 200px;
            margin: 2rem auto 1rem auto;
            padding: 0.75rem;
            background-color: #007bff;
            color: white;
            text-align: center;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }
        .btn-add-review:hover {
            background-color: #0056b3;
        }
        .no-reviews {
            text-align: center;
            color: #666;
            font-size: 1.2rem;
            margin-top: 1.5rem;
        }
        .write-review-box {
            margin: 2rem auto;
            padding: 1rem;
            background-color: #e9ecef;
            border: 1px solid #ced4da;
            border-radius: 5px;
            text-align: center;
            font-size: 1.3rem;
            color: #333;
        }
    </style>
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
                        <li class="nav-item"><a class="nav-link" href="login.php">Pachete</a></li>
                        <li class="nav-item"><a class="nav-link" href="lista_bagaj.php">Lista</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorii</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="login.php">Mare</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.php">Munte</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.php">Orașe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="login.php">Contact</a></li>
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

<!--================ Main Content Area =================-->
<div class="review-container">
  <br>
      </br>
    <div class="write-review-box">
        Aici poti vedea recenziile clienților noștri!
    </div>
    <?php
    // Conexiune la baza de date
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "proiect_colectiv";

    // Creare conexiune
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificare conexiune
    if ($conn->connect_error) {
        die("Conexiune eșuată: " . $conn->connect_error);
    }

    // Interogare SQL pentru a selecta recenziile și informațiile utilizatorului
    $sql = "SELECT * FROM recenzii";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Afisare recenzii
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review'>";
            echo "<h2>" . $row["titlu"]. "</h2>";
            echo "<p>" . $row["continut"]. "</p>";
            echo "<p class='meta'>Scrisă de: " . $row["email"]. " | Data: " . $row["data_adaugare"]. "</p>";
            echo "</div>";
        }
    }
    if ($result->num_rows == 0) {
        echo "<p class='no-reviews'>Nu există recenzii încă.</p>";
    }
    $conn->close();
    ?>
</div>

<!-- ================ start footer Area ================= -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
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
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul></ul>
                        </div>										
                    </div>							
                </div>
            </div>							
            <div class="col-lg-3 col-md-6 col-sm-6">
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
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"></p>
                <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right"></div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->

<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="vendors/jquery.ajaxchimp.min.js"></script>
<script src="vendors/mail-script.js"></script>
<script src="js/main.js"></script>
</body>
</html>