<?php
// Verificăm dacă formularul a fost trimis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificăm dacă există datele trimise prin POST
    if (isset($_POST['nume']) && isset($_POST['email']) && isset($_POST['subiect']) && isset($_POST['mesaj'])) {
        // Conectare la baza de date
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "proiect_colectiv";

        $conn = new mysqli($servername, $username, $password, $database);

        // Verificare conexiune
        if ($conn->connect_error) {
            die("Conexiune eșuată: " . $conn->connect_error);
        }

        // Escapare și pregătirea datelor pentru inserare în baza de date
        $name = $conn->real_escape_string($_POST['nume']);
        $email = $conn->real_escape_string($_POST['email']);
        $subject = $conn->real_escape_string($_POST['subiect']);
        $message = $conn->real_escape_string($_POST['mesaj']);

        // Interogare pentru inserarea datelor în baza de date
        $sql = "INSERT INTO probleme_users (nume, email, subiect, mesaj) VALUES ('$name', '$email', '$subject', '$message')";

        if ($conn->query($sql) === TRUE) {
            header("Location: contact.php");
            exit();
        } else {
            echo "Eroare: " . $sql . "<br>" . $conn->error;
        }

        // Închidere conexiune
        $conn->close();
    } else {
        // Afișare mesaj de eroare dacă nu s-au trimis datele corect
        echo "Eroare: Date incomplete!";
    }
}
?>