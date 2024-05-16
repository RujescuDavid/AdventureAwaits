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

// Procesare autentificare utilizator
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // Interogare SQL pentru a verifica autentificarea în baza de date
    $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utilizatorul a fost autentificat cu succes
        echo "Autentificare reușită!";
    } else {
        // Autentificare eșuată
        echo "Autentificare eșuată. Verifică adresa de e-mail și parola introduse.";
    }
}

$conn->close();
?>
