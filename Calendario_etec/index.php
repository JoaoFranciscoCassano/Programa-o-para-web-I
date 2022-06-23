<?php include('admin/calendario.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"></link>
</head>
<body>
    <div class="container">
    <link><h3><a href="?mes=<?php echo $anterior; ?>">&lt;</a> <?php echo $titulo; ?> <a href="?mes=<?php echo $proximo; ?>">&gt;</a></h3></link>
    <table class="table table-dark table-hover">

        <caption>Calendário</caption>
        <tr>
            <th>Dom</th>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
        </tr>
    <?php
        foreach($semanas as $semana)
            echo $semana
        ;
    ?>
      
</table>
</div>
</body>
</html>