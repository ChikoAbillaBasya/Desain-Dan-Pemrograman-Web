<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nama"];
    $email = $_POST["email"];
    
    echo "Nama: " . $name . "<br>";
    echo "Email: " . $email;
}
?>