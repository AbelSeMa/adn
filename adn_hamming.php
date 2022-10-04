<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamming ADN</title>
</head>
<body>
    <?php
    $primer_adn = trim($_GET['primer']);
    $segundo_adn = trim($_GET['segunda']);
    $hammin = 0;

    if (strlen($primer_adn) != strlen($segundo_adn)) { ?>
        <p>Las cadenas no son de las mismas longitudes</p>

    <?php
    } else {
        for ($i = 0; $i < strlen($primer_adn);$i++) {
            if ($primer_adn[$i] != $segundo_adn[$i])
            $hammin += 1;
        }
    }
    ?>

    <p> La diferencia Hamming entre estas dos cadenas de ADN es <?= $hammin ?> </p>
</body>
</html>