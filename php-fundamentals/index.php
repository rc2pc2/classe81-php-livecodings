<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PHP Condition
    </title>

    <link rel="stylesheet" href="./styles/style.css">
</head>
<body>

    <form action="./index.php" method="GET">
        <input type="number" name="password">
        <button type="submit">invia</button>
    </form>

        <?php

            $password = 11;

            // isset()
            if (empty($_GET['password'])){
                echo '<p>Inserisci una parola e premi invio</p>';
            } else {
                $userWord = $_GET['password'];
                var_dump(
                    $userWord
                );

                if ($password === $userWord){
                    echo "<p class='green'> Benvenuta o benvenuto! </p>";
                } else {
                    echo "<p class='red'> Accesso negato</p>";
                }
            }
        ?>



</body>
</html>