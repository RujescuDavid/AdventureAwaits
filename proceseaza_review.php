<?php
session_start();

// Verificăm dacă utilizatorul este autentificat și dacă adresa de email este setată în sesiune
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true || !isset($_SESSION['email'])) {
    // Dacă utilizatorul nu este autentificat, îl redirecționăm către pagina de login
    header("Location: login.php");
    exit();
}

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

// Obținem adresa de email a utilizatorului din sesiune
$email = $_SESSION['email'];

// Procesăm datele din formular
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titlu = $_POST['titlu'];
    $continut = $_POST['continut'];

    // Escapare caractere speciale pentru a preveni SQL injection
    $titlu = $conn->real_escape_string($titlu);
    $continut = $conn->real_escape_string($continut);

    // Interogare SQL pentru inserarea recenziei
    $sql = "INSERT INTO recenzii (email, titlu, continut) VALUES ('$email', '$titlu', '$continut')";

    if ($conn->query($sql) === true) {
        header("Location: recenzii_autentificat.php");
    exit();
    } else {
        echo "Eroare la adăugarea recenziei: " . $conn->error;
    }
}

$conn->close();
?>
