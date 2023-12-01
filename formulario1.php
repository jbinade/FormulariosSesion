<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formulario2.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>

        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" required>

        <br><br>

        <label for="email">Email</label>
        <input type="email" name="email" required>
        
        <br><br>

        <label>Sexo</label>
        <input type="radio" name="sexo" value="masculino" required checked> Masculino
        <input type="radio" name="sexo" value="femenino" required> Femenino

        <br><br>
        
        <input type="submit" name="enviar" id="enviar" value="enviar">
    </form>
</body>
</html>