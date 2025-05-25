<?php
$dogru_email = "b241210105@sakarya.edu.tr";
$dogru_sifre = "241210105";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $sifre = $_POST["password"] ?? '';

    if ($email === $dogru_email && $sifre === $dogru_sifre) {

        header("Location: index.html");
        exit;
    } else {

        header("Location: login.html?error=1");
        exit;
    }
} else {
    header("Location: login.html");
    exit;
}
