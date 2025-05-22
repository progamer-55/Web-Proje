<?php
$dogru_email = "b241210105@sakarya.edu.tr";
$dogru_sifre = "241210105";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $sifre = $_POST["password"] ?? '';

    if ($email === $dogru_email && $sifre === $dogru_sifre) {
        echo "<h2 style='text-align:center;margin-top:50px;'>Hoşgeldiniz $sifre</h2>";
    } else {
        header("Location: login.html");
        exit;
    }
} else {
    header("Location: login.html");
    exit;
}
?>
