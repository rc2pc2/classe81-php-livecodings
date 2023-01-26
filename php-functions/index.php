<?php
    // include_once __DIR__ . '/functions.php';

    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions Livecoding</title>

    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h2>
            Functions Livecoding
        </h2>
    </header>

    <main>
        <h4>
            <?php

                // $_SESSION['username'] = 'ginetta95loveTokyoHotel';
            ?>
        </h4>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta repellat odit nihil, adipisci sequi quo. Cumque quam, ea cum nobis dignissimos, voluptatum pariatur necessitatibus illo libero tempora deleniti deserunt! Tenetur.


            <?php var_dump($_SESSION['username'])?>
        </p>
    </main>

    <footer></footer>



</body>
</html>