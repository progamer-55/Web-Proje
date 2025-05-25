<?php
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz</title>
</head>
<body>
    <h2 style="text-align:center; margin-top:50px;">
        Hoşgeldiniz <?php echo htmlspecialchars($_SESSION["email"]); ?>!
    </h2>
</body>
</html>
