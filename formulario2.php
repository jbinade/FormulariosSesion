<?php

    $nombre = $_REQUEST["nombre"];
    $apellidos = $_REQUEST["apellidos"];
    $email = $_REQUEST["email"];
    $sexo = $_REQUEST["sexo"];
  
    session_start();

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellidos"] = $apellidos;
    $_SESSION["email"] = $email;
    $_SESSION["sexo"] = $sexo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario3.php" method="post">

        <label for="convivientes">Número de Convivientes</label>
        <input type="number" name="convivientes" required><br>

        <br>
    
        <label>Aficiones</label><br>
        <input type="checkbox" name="deportes" value="deportes"> Deportes
        <input type="checkbox" name="cine" value="cine"> Cine
        <input type="checkbox" name="tecnologia" value="tecnologia"> Tecnología
        <input type="checkbox" name="viajar" value="viajar"> Viajar
        
        <br><br>

        <label for="menu">Menú Favorito</label>
        <select name="menu">
            <option value="paella" selected>Paella</option>
            <option value="pasta">Pasta</option>
            <option value="cocido">Cocido</option>
            <option value="lubina">Lubina</option>
        </select><br>

        <br>

        <input type="submit" name="enviar" id="enviar" value="enviar">
    </form>
</body>
</html>