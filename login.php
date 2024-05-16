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

// Pornim sau continuăm o sesiune
session_start();

// Verificăm dacă utilizatorul este deja autentificat
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    // Dacă utilizatorul este autentificat, îl redirecționăm către pagina principală
    header("Location: index_autentificat.php");
    exit();
}

// Procesare autentificare utilizator
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // Escapare caractere speciale pentru a preveni SQL injection
    $email = $conn->real_escape_string($email);
    $parola = $conn->real_escape_string($parola);

    // Interogare SQL pentru a verifica datele de autentificare
    $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";
    $result = $conn->query($sql);
   
    if ($result->num_rows > 0) {
        // Autentificare reușită
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;
        header("Location: index_autentificat.php"); // Redirecționare către pagina principală
        exit();
    } else {
        // Autentificare eșuată
        echo "<script>alert('Autentificare eșuată. Verifică adresa de e-mail și parola introduse.')</script>";

    }
}

$conn->close();
?>
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

<section class="hero-banner magic-ball">
    <div class="container">
        <div class="row align-items-center text-center text-md-left">
            <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
            </div>
            <div class="col-md-6 col-lg-7 col-xl-6 offset-xl-1">
                <img class="img-fluid" src="img/home/hero-img.png" alt="">
            </div>
        </div>
    </div>
</section>
<div class="box">
    <style media="screen">
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-size: cover;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-140%, -50%);
            width: 400px;
            padding: 40px;
            background: rgba(0, 0, 0, 0.6);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }

        .box h2 {
            margin: 0 0 30px;
            padding: 0px;
            color: #fff;
            text-align: center;
        }

        .box .input-box {
            position: relative;
        }

        .box .input-box input {
            width: 100%;
            padding: 10px 0px;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            outline: none;
            background: transparent;
            border-bottom: 1px solid #fff;
        }

        .box .input-box label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0px;
            font-size: 16px;
            color: #fff;
            transition: .5s;
        }

        .box .input-box input:focus ~ label,
        .box .input-box input:valid ~ label {
            top: -18px;
            left: 0px;
            color: #03a9f4;
            font-size: 12px;
        }

        .box .input-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box input[type="submit"],
        .box .register-link {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #227be3;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            margin-right: 10px; /* Adaugare margin-right pentru a crea spațiu între butoane */
        }

        .box input[type="submit"]:hover,
        .box .register-link:hover {
            background-color: #3067b9;
        }
    </style>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Logare</h2>
        <div class="input-box d-flex">
            <input type="email" name="email" id="email" autocomplete="off" required>
            <label for="email">Email: </label>
        </div>
        <div class="input-box d-flex">
            <input type="password" name="parola" id="parola" autocomplete="off" required>
            <label for="parola">Parola: </label>
        </div>
        <div class="input-group">
            <input type="submit" value="Logare">
            <a href="register.php" class="register-link">Înregistrare</a>
        </div>
    </form>
</div>


</body>
</html>