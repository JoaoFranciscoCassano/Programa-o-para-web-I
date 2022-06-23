<?php include('assets/Animais.php')?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Os 20 animais mais rapidos do mundo</title>
</head>
<body>
    <center><h3>Os 20 animais mais rapidos do mundo</h3></center>
    <center><table border="1">
    <tr>
        <th>Nome - Nome Cientifico
            <a href="?tipo=nome&&ordem=asc">&#9650;</a>
            <a href="?tipo=nome&&ordem=desc">&#9660;</a>
        </th>
        <th>Velocidade(Km/h)
            <a href="?tipo=velo&&ordem=desc">&#9650;</a>
            <a href="?tipo=velo&&ordem=asc">&#9660;</a>
        </th>


    </tr>

    <?php
        foreach($animais as $nome => $velo) {
            echo '<tr><td>'.$nome. '</td>';
            echo '<td>'.$velo. '</td></tr>';
        }

    ?>
    </table>
</body>
</html>