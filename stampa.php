<?php
  $parola = $_GET['parola'];
  $paragrafo = $_GET['paragrafo'];
  $lunghezza = strlen($paragrafo);
  $censura = str_replace($parola, '***', $paragrafo);
  $lunghezzaCensura = strlen($censura);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel="stylesheet" href="style.css">
    <title>Bad Words</title>
</head>
<body>
    <div class="container">
        <div class="paragrafo">
            <h3>Questo è il paragrafo scritto</h3>
            <span><?php echo $paragrafo ?></span>
            <p>Questa è la sua lunghezza: <strong><?php echo $lunghezza ?></strong></p>
        </div>
        <div class="parola">
            <h3>Questa è la parola censurata scelta</h3>
            <span><?php echo $parola ?></span>
        </div>
        <div class="paragrafo-censura">
            <h3>Questo è il paragrafo ma con la parola censurata</h3>
            <span><?php echo $censura ?></span>
            <p>Questa è la lunghezza del paragrafo ma con la parola censurata: <strong><?php echo $lunghezzaCensura ?></strong></p>
        </div>
    </div>
</body>
</html>