<?php
session_start(); // Pornirea sau reluarea sesiunii

$servername = "localhost"; // Schimbați aceasta dacă baza de date este pe un server diferit
$username = "root";
$password = "";
$database = "proiect_colectiv";

// Conectare la baza de date
$conn = new mysqli($servername, $username, $password, $database);

// Verificare conexiune
if ($conn->connect_error) {
    die("Conexiune eșuată: " . $conn->connect_error);
}

// Obținem adresa de email a utilizatorului din sesiune, dacă există
if(isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    // Dacă nu există o adresă de email în sesiune, afișăm un mesaj de eroare și oprim execuția scriptului
    die("Adresa de email lipsește în sesiune!");
}
// Verificăm dacă s-a trimis ID-ul produsului pentru ștergere prin metoda GET
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Interogare SQL pentru ștergerea produsului din coș
    $sql_delete = "DELETE FROM cos_cumparaturi WHERE id = $id";

    if ($conn->query($sql_delete) === TRUE) {
        // Ștergeți și elementul corespunzător din coșul de cumpărături din sesiune
        if(isset($_SESSION['cart']) && isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }

        // Redirecționează înapoi către pagina coșului de cumpărături
        header("Location: cos.php");
        exit();
    } else {
        echo "Eroare la ștergerea produsului din baza de date: " . $conn->error;
    }
} else {
    // Afișează un mesaj de eroare dacă ID-ul produsului pentru ștergere lipsește sau este invalid
    echo "ID-ul produsului pentru ștergere lipsește sau este invalid!";
}


// Închidem conexiunea la baza de date
$conn->close();
?>
