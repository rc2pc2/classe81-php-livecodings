<?php
    require_once __DIR__ . '/models/Player.php';
    require_once __DIR__ . '/models/SkillSet.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Intro</title>
</head>
<body>
    <main>
        <h1>
            PHP OOP Intro
        </h1>
        <pre>
            <?php

                // phpinfo();
                // $gino = new Player('Gino', 22, new SkillSet(10, 4, 3));
                $gina = new Player('Ginetta', 26, new SkillSet(30,25, 28));

                var_dump($gina->getName());

            ?>
        </pre>
    </main>

</body>
</html>