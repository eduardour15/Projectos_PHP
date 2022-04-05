<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    $cantFilas = 10;
    $cantColumn = 1;
    ?>
    <div class="container">
        <table style="margin-top:30px;width:30%; margin-left:auto; margin-right:auto;"class="table">
            <thead class="thead-dark">
                <th style="text-align:center;">Tabla de multiplicar</th>
            </thead>
            <tbody>
                <?php
                for ($i = 0; $i <= $cantFilas; $i++) {
                    echo "<tr>";
                    $aux1 = 5;
                    $aux2 = 1;
                    echo "<td style=\"text-align:center\">". $aux1 . " X " . $i . "=" . $aux1 * $i . "</td>";
                    $aux2++;
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>