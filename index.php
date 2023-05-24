<?php
    require_once(__DIR__ . '/Character.php');
    require_once(__DIR__ . '/Hero.php');
    require_once(__DIR__ . '/Orc.php');

    $hero = new hero(2000, 0, 'épée', 1600, 'bouclier', 250);
    $orc = new orc(500, 0, 60);
    $hulk = new hero();

    while ($hero->getHealth()>0){
        echo 'l\'Orc attaque';
        $hero->attacked($orc->attack());
    }
    
    // while ($hero->getHealth() > 0 && $orc->getHealth() > 0) {
    //     $orc->attack();
    //     if ($hero->getHealth() <= 0) {
    //         echo'le heros est K.O!: ' . $health;
    //     }
        
    //     if ($orc->getHealth() <= 0) {
    //         echo 'l\'Orc est K.O!' .$health;
    //     }
    // }
    ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P.O.OCTOGONE</title>
</head>

<body>
    <h1>P.O.OCTOGONE</h1>

</body>

</html>