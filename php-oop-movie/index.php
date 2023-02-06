<?php
    require_once __DIR__ . '/Models/Movie.php';
    // require_once __DIR__ . '/models/SkillSet.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Movie</title>
</head>
<body>
    <main>
        <h1>
            PHP OOP Movie
        </h1>
        <pre>
            <?php

                    $newElement = new Movie('I booleani', 'Elisabetta Daho', ['Jade', 'Seba', 'Turbaggio', 'Montrone', 'Donzella', 'Emmolo'], 1987);
                    var_dump($newElement);
                    echo $newElement->getTitle();

            ?>
        </pre>
    </main>

</body>
</html>