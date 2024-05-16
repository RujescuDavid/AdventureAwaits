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

// Funcție pentru a trimite e-mail de verificare
function trimiteEmailVerificare($email) {
    // Aici poți scrie codul pentru a trimite e-mailul de verificare
    // Poți utiliza funcții PHP precum mail() sau biblioteci externe precum PHPMailer
    // Exemplu simplu cu mail():
    $subject = 'Verificare cont';
    $message = 'Bine ai venit! Contul tău a fost creat cu succes. Te rugăm să îl verifici folosind link-ul de mai jos.';
    $headers = 'From: AdventureAwaits@gmail.com';
    mail($email, $subject, $message, $headers);
}

// Procesare autentificare utilizator
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $parola = $_POST['parola'];

    // Interogare SQL cu noul nume al tabelului și numele câmpurilor în litere mici
    $sql = "SELECT * FROM users WHERE email = '$email' AND parola = '$parola'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utilizatorul a fost autentificat cu succes
        $row = $result->fetch_assoc();
        $id = $row['id']; // Numele câmpului ID este actualizat la litere mici
        
        // Trimite e-mail de verificare
        trimiteEmailVerificare($email);

        echo "Autentificare reușită! Un e-mail de verificare a fost trimis la adresa $email.";
    } else {
        echo "Autentificare eșuată. Verifică adresa de e-mail și parola introduse.";
    }
}

$conn->close();
?>
