<?php
// Conectarea la baza de date
$servername = "localhost";
$username = "root";
$password = "";
$database = "proiect_colectiv";

// Crearea conexiunii
$conn = new mysqli($servername, $username, $password, $database);

// Verificarea conexiunii
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Verificarea trimiterii formularului
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Interogarea SQL pentru inserarea datelor în baza de date
    $sql = "INSERT INTO ContactMessages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirecționarea înapoi la pagina de contact sau afișarea unui mesaj de succes
        header("Location: contact.php?success=true");
        exit();
    } else {
        // Redirecționarea înapoi la pagina de contact sau afișarea unui mesaj de eroare
        header("Location: contact.php?error=true");
        exit();
    }
}

// Închiderea conexiunii
$conn->close();
?>
