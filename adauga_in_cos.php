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

// Verificăm dacă s-au trimis date prin POST și dacă sunt valabile
if(isset($_POST['id']) && isset($_POST['nume']) && isset($_POST['pret'])) {
    $id = $_POST['id'];
    $nume = $_POST['nume'];
    $pret = $_POST['pret'];

    // Interogare SQL pentru adăugarea produsului în coș
    $sql = "INSERT INTO cos_cumparaturi (id_produs, nume_produs, pret, email) VALUES ($id, '$nume', $pret, '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Produsul a fost adăugat în coș cu succes!');</script>";;
        header("Location: cos.php");
        exit();
        // Adăugare detalii despre produs în sesiune
        $_SESSION['cart'][] = array(
            'id_produs' => $id,
            'nume_produs' => $nume,
            'pret' => $pret,
            'email' => $email // Adăugați adresa de email în sesiune
        );
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
} else {
    // Afișăm un mesaj de eroare dacă datele lipsesc sau sunt incomplete
    echo "Datele pentru adăugare în coș lipsesc sau sunt incomplete!";
}

// Închidem conexiunea la baza de date
$conn->close();
?>