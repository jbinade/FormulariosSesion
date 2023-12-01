<?php

    $convivientes = $_REQUEST["convivientes"];

    $aficiones[] = $_REQUEST["deportes"];
    $aficiones[] = $_REQUEST["cine"];
    $aficiones[] = $_REQUEST["tecnologia"];
    $aficiones[] = $_REQUEST["viajar"];
    

    $menu = $_REQUEST["menu"];

    session_start();

    $_SESSION["convivientes"] = $convivientes;
    $_SESSION["aficiones"] = $aficiones;
    $_SESSION["menu"] = $menu;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nombre y apellidos: <?= $_SESSION["nombre"] . " " . $_SESSION["apellidos"] ?></li>
        <li>Email: <?= $_SESSION["email"] ?></li>
        <li>Sexo: <?= $_SESSION["sexo"] ?></li>
        <li>Convivientes: <?= $_SESSION["convivientes"] ?></li>
        <li>Aficiones: <?= implode(" ", $_SESSION["aficiones"]) ?></li>
        <li>Menu favorito: <?= $_SESSION["menu"] ?></li>
    </ul>
</body>
</html>

