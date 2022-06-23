<?php include('assets/Cidades.php')?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>As 20 melhores cidades para se viver bem e sossegado no Brasil</title>
</head>
<body>
    <center><h3>As 20 melhores cidades para se viver bem e sossegado no Brasil</h3></center>
    <center><table border="1">
    <tr>
        <th>Nome e sigla
            <a href="?tipo=nome&&ordem=asc">&#9650;</a>
            <a href="?tipo=nome&&ordem=desc">&#9660;</a>
        </th>
        <th>IDHM
            <a href="?tipo=IDHM&&ordem=desc">&#9650;</a>
            <a href="?tipo=IDHM&&ordem=asc">&#9660;</a>
        </th>


    </tr>

    <?php
        foreach($cidades as $nome => $IDHM) {
            echo '<tr><td>'.$nome. '</td>';
            echo '<td>'.$IDHM. '</td></tr>';
        }

    ?>
    </table>
</body>
</html>