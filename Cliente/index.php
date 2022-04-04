<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <section class="form">
       <center> <h4>Tabla de Cliente</h4></center>
    <center><h4>Insertando Clientes</h4></center>
    <form action="Cliente.php" method="post">
        <input class="controls"  type="text" name="marcamoto" id="marcamoto" placeholder="Ingrese Numero de Marca Moto">
        <input class="controls"  type="text" name="nombre" id="nombre" placeholder="Ingrese Nombre">
        <input class="controls"  type="text" name="telefono" id="telefono" placeholder="Ingrese Telefono">
        <input class="controls"  type="text" name="correo" id="correo" placeholder="Ingrese Correo">
        <input class="botons" type="submit" value="Enviar">

      
    </form>
    </section>
</body>
</html>