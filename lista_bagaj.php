<?php
session_start();

// Conexiune la baza de date
$servername = "localhost";
$username = "root";
$password = "";
$database = "proiect_colectiv";

// Creare conexiune
$conn = new mysqli($servername, $username, $password, $database);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiunea a eșuat: " . $conn->connect_error);
}

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Extrage user_id din baza de date
    $email = $_SESSION['email']; // presupunând că email-ul este setat în $_SESSION la autentificare
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $userId = $row['id'];
            } else {
                echo "Eroare: Utilizatorul nu a fost găsit.";
                exit();
            }
        } else {
            echo "Eroare la executarea interogării: " . $stmt->error;
            exit();
        }
        $stmt->close();
    } else {
        echo "Eroare la pregătirea interogării: " . $conn->error;
        exit();
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item'])) {
        $item = trim($_POST['item']);
        if (!empty($item)) {
            $stmt = $conn->prepare("INSERT INTO bagaje (user_id, item) VALUES (?, ?)");
            if ($stmt) {
                $stmt->bind_param("is", $userId, $item);
                if ($stmt->execute()) {
                    // Redirecționare către pagina curentă pentru a afișa actualizarea
                    header("Location: " . $_SERVER['REQUEST_URI']);
                    exit();
                } else {
                    echo "Eroare la inserarea datelor: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Eroare la pregătirea interogării: " . $conn->error;
            }
        } else {
            echo "Eroare: Elementul nu poate fi gol.";
        }
    }

    if (isset($_GET['delete'])) {
      $itemName = $_GET['delete']; // Get the item name from the URL
      $stmt = $conn->prepare("DELETE FROM bagaje WHERE item = ? AND user_id = ?");
      if ($stmt) {
          $stmt->bind_param("si", $itemName, $userId);
          if ($stmt->execute()) {
              // Redirection to the current page to show the update
              header("Location: lista_bagaj.php");
              exit();
          } else {
              echo "Error deleting data: " . $stmt->error;
          }
          $stmt->close();
      } else {
          echo "Error preparing statement: " . $conn->error;
      }
  }

    // Obținerea listei de bagaje
    $bagaje = [];
    $stmt = $conn->prepare("SELECT id, item FROM bagaje WHERE user_id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $userId);
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()) {
                $bagaje[] = $row;
            }
        } else {
            echo "Eroare la executarea interogării: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Eroare la pregătirea interogării: " . $conn->error;
    }
} else {
    echo "Bună! Te rugăm să te autentifici pentru a accesa această pagină.";
    echo '<a href="login.php">Autentificare</a>';
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>AdventureAwaits - Liste de mare</title>
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
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -60px" data-top-bottom="background-position: 0 100px">
<div class="container text-center">
  <div class="hero-banner-sm-content">
    <h1>Lista de bagaje</h1>
    <p>Adaugă și gestionează elementele din lista ta de bagaje pentru vacanță.</p>
  </div>
</div>
</section>
<!--================Hero Banner SM Area End =================-->

<!--================Service Area Start =================-->
<section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
  <div class="container">
    <div class="section-intro text-center pb-10px">
    
    </div>

    <form method="post" action="">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Adaugă un element" name="item" required>
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Adaugă</button>
        </div>
      </div>
    </form>
    <br>
</br>
    

    <ul class="list-group">
      <?php if (isset($bagaje) && count($bagaje) > 0): ?>
        <?php foreach ($bagaje as $bagaj): ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo htmlspecialchars($bagaj['item']); ?>
            <a href="?delete=<?php echo $bagaj['item']; ?>" class="btn btn-danger btn">Șterge</a>
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <li class="list-group-item">Nu există elemente în lista ta de bagaje.</li>
      <?php endif; ?>
    </ul>
  </div>
</section>
<!--================Service Area End =================-->

<!-- ================ start footer Area ================= -->
<footer class="footer-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Despre noi</h6>
          <p>Suntem o companie orientată către crearea unei experiențe de călătorie mai ușoare și mai plăcute pentru clienții noștri, prin furnizarea de servicii și soluții care să răspundă nevoilor lor în mod eficient și convenabil.</p>
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
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Abonare</h6>
          <p>Înscrie-te la serviciile noastre pentru a primi cele mai recente oferte de călătorii.</p>								
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
<script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>	
<script src="js/main.js"></script>
</body>
</html>
