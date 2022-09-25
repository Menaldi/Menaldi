<?php

$nama = ["Indonesia", "Singapura", "Malaisia", "Brunei", "Thailand"];
$nama[] = "Laos";
$nama[] = "Filipina";
$nama[] = "Myanmar";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lopping for Array</title>
</head>
<body>
    <p>
    Daftar Negara ASEAN awal : </br>
    <?php
        for ($i = 0; $i < 4; $i++) {
            echo "<li>$nama[$i]</li>";

        }
    ?>
    </p>
    <p>
    Daftar Negara ASEAN baru : </br>
    <?php
        for ($i = 0; $i < count($nama); $i++) {
            echo "<li>$nama[$i]</li>";
            

        }
    ?>
    </p>
</body>
</html>