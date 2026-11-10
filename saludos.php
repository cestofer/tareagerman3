<?php
$saludos = [
    "Español" => "Hola",
    "Inglés" => "Hello",
    "Francés" => "Bonjour",
    "Alemán" => "Hallo",
    "Italiano" => "Ciao"
];

$mensaje = "";

if(isset($_POST['idioma']))
{
    $mensaje = $saludos[$_POST['idioma']];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludos</title>

    <style>
        body{
            font-family:Arial, sans-serif;
            background-color:#f0f0f0;
            text-align:center;
        }

        .contenedor{
            width:60%;
            margin:auto;
            margin-top:50px;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0px 0px 10px gray;
        }

        h1{
            color:#006699;
        }

        .saludo{
            font-size:30px;
            color:green;
            margin-top:20px;
        }
    </style>
</head>
<body>


    <div class="contenedor">

        <h1>Página de Saludos</h1>

        <form method="POST">

            <label>Selecciona un idioma:</label>
            <br><br>

            <select name="idioma">
                <?php
                foreach($saludos as $idioma => $saludo)
                {
                    echo "<option value='$idioma'>$idioma</option>";
                }
                ?>
            </select>

            <br><br>

            <input type="submit" value="Mostrar saludo">

        </form>

        <?php
        if($mensaje != "")
        {
            echo "<div class='saludo'>$mensaje</div>";
        }
        ?>

        <br>
       <a href="bienbenidos.php">Volver a Bienvenida</a>

    </div>

</body>
</html>