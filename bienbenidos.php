<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:#d9eaf7;
            text-align:center;
            margin:0;
            padding:0;
        }

        .contenedor{
            width:80%;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        img{
            width:120px;
        }

        h1{
            color:#003366;
        }
    </style>
</head>
<body>

    <div class="contenedor">

        <img src="logo.png" alt="Logo">

      
        <h1>Bienvenidoooooooooooooooooo</h1>

       
        <p><b>Alumno:</b> Fernando</p>
        <p><b>Tarea:</b> (individual)  Página con varias ramas</p>
        <p><b>Fecha:</b> <?php echo date("d/m/Y"); ?></p>
        <p><b>Escuela:</b> Nombre de tu escuela</p>

        <br>

        <a href="saludos.php">Ir a Saludos</a>

    </div>

</body>
</html>