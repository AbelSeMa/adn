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

    if (($longitud = strlen($primer_adn)) != strlen($segundo_adn)) { ?>
        <p>Las cadenas no son de las mismas longitudes</p>

    <?php
    } else {
        for ($i = 0; $i < $longitud; $i++) {
            #función no eficiente porque en cada paso del for, se calcula el strlen().
            /**
             * es mejor calcular en una varible la longitud de las cadenas
             * de forma que si se usa en el primer for, ya estará calculada y
             * esa variable ya tendrá el valor que buscamos
             */
            
            if ($primer_adn[$i] != $segundo_adn[$i])
            $hammin += 1;
        }
    }
    ?>

    <p> La diferencia Hamming entre <?= $primer_adn ?> y <?= $segundo_adn ?> es: <?= $hammin ?> </p>
</body>
</html>