<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "proiect_colectiv";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $cod_verificare = $_POST['cod_verificare'];

    // Check if the email and code match what's in the database
    $checkVerificationQuery = "SELECT * FROM `users` WHERE email = '$email' AND cod_verificare = '$cod_verificare'";
    $verificationResult = mysqli_query($conn, $checkVerificationQuery);

    if (mysqli_num_rows($verificationResult) > 0) {
        // Mark the user as verified
        $markVerifiedQuery = "UPDATE `users` SET verified = 1 WHERE email = '$email'";
        mysqli_query($conn, $markVerifiedQuery);

        // Redirect to a success page or login page
        header("Location: login.php");
        exit();
    } else {
        $errorMessage = "Cod de verificare invalid.";
    }
} elseif (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Display the form with email pre-filled
    $emailField = '<input type="hidden" name="email" value="' . htmlspecialchars($email) . '" />';
} else {
    $errorMessage = "Link de verificare invalid.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verificare email</title>
</head>
<body>
    <h2>Verificare email</h2>
    <form method="post">
        <?php
        if (isset($errorMessage)) {
            echo '<p style="color: red;">' . $errorMessage . '</p>';
        } else {
            echo '<p>Introduceți codul de verificare primit pe email.</p>';
        }
        ?>
        <label for="cod_verificare">Cod de verificare:</label>
        <input type="text" id="cod_verificare" name="cod_verificare" required />
        <?php echo $emailField; ?>
        <br />
        <input type="submit" value="Verifică" />
    </form>
</body>
</html>