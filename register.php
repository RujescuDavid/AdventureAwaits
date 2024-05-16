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

// Verificare dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $prenume = $_POST['prenume'];
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // Generare cod de verificare
    $cod_verificare = bin2hex(random_bytes(8)); // Generăm un cod de verificare de 8 caractere

    // Interogare SQL pentru inserarea datelor în baza de date
    $sql = "INSERT INTO users (nume, prenume, email, parola, cod_verificare) VALUES ('$nume', '$prenume', '$email', '$parola', '$cod_verificare')";

    if ($conn->query($sql) === TRUE) {
        // Trimitere email cu codul de verificare
        $to = $email;
        $subject = "Verificare adresa de email";
        $message = "Salut $nume, \n\nCodul de verificare pentru adresa ta de email este: $cod_verificare\n\n";
        $headers = "From: adresa@ta-de-email.com";

        mail($to, $subject, $message, $headers);

        // Afiseaza un mesaj de înregistrare reușită și instrucțiuni pentru verificarea emailului
        echo "<script>alert('Înregistrare reușită! Un email a fost trimis la adresa ta pentru verificarea contului.');</script>";
    } else {
        // Afiseaza eroarea daca inregistrarea a esuat
        echo "<script>alert('Eroare la înregistrare: ')'</script>" . $conn->error;
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



<!--================Hero Banner Area Start =================-->
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
    <!--================Hero Banner Area End =================-->

    <style media="screen">
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(images/tasty-image.png);
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

        .box input[type="submit"],
        .box .register-link {
            width: 100%;
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #227be3;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 10px;
            text-align: center;
            text-decoration: none;
            display: block;
        }

        .box input[type="submit"]:hover,
        .box .register-link:hover {
            background-color: #3067b9;
        }
    </style>


    <form method="post" action="">
        <h2>Înregistrare</h2>
        <div class="input-box">
            <input type="text" name="nume" id="nume" autocomplete="off" required>
            <label for="nume">Nume: </label>
        </div>
        <div class="input-box d-flex">
            <input type="text" name="prenume" id="prenume" autocomplete="off" required>
            <label for="prenume">Prenume: </label>
        </div>
        <div class="input-box d-flex">
            <input type="email" name="email" id="email" autocomplete="off" required>
            <label for="email">Email: </label>
        </div>
        <div class="input-box d-flex">
            <input type="password" name="parola" id="parola" autocomplete="off" required>
            <label for="parola">Parola: </label>
        </div>
        <input type="submit" value="Înregistrează-te">
        <a href="login.php" class="register-link">Logare</a>
    </form>
</div>
</body>
</html>
