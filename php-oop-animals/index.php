<?php
    require_once __DIR__ . '/Models/Animal.php';
    // require_once __DIR__ . '/models/SkillSet.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Farm</title>
</head>
<body>
    <main>
        <h1>
            PHP OOP Animal
        </h1>
        <pre>
            <?php

                    $newElement = new Cat('Fido', 2012, 'rossa');
                    $newElement->setName(21424);
                    var_dump($newElement);


            ?>
        </pre>
    </main>

</body>
</html>