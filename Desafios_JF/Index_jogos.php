<?php include('assets/Jogos.php')?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Commoneytible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20 jogos mais caros de todos os tempos</title>
</head>
<body>
    <center><h3>20 jogos mais caros de todos os tempos</h3></center>
    <center><table border="1">
    <tr>
        <th>Nome do Jogo
            <a href="?tipo=nome&&ordem=asc">&#9650;</a>
            <a href="?tipo=nome&&ordem=desc">&#9660;</a>
        </th>
        <th>Preço
            <a href="?tipo=money&&ordem=desc">&#9650;</a>
            <a href="?tipo=money&&ordem=asc">&#9660;</a>
        </th>


    </tr>

    <?php
        foreach($Games as $nome => $money) {
            echo '<tr><td>'.$nome. '</td>';
            echo '<td>'.$money. '</td></tr>';
        }

    ?>
    </table>
</body>
</html>