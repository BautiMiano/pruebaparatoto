<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" placeholder="name" name="name" required="">
        <input type="email" placeholder="email" name="email" required="">
        <input type="text" placeholder="asunto" name="asunto" required="">
        <textarea placeholder="mensaje" name="msg" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="enviar">
    </form>

    <?php
    include("correo.php");
    ?>

</body>
</html>