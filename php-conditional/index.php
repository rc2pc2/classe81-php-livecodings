<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PHP Condition
    </title>
</head>
<body>
    <h1>
        CONDITION IDENTITY
    </h1>

    <?php
    $array1 = [
            'paperella',
            'mkdihr',
            'lanciafiamme',
            'alessio',
            'cera per baffi',
            'caffè alla goccia ognibene',
            'issehth'
        ];

        var_dump($array1);
    ?>
    <form action="./index.php" method="GET">
        <input type="text" name="word">
        <button type="submit">search</button>
    </form>

    <pre>
        <?php

        if ( isset($_GET['word'])){
            var_dump(in_array($_GET['word'], $array1)) ;
        }

        ?>


    </pre>


</body>
</html>