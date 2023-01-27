<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password</title>


    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head>
<body>

    <header class="container p-3">
        <h1>
            Strong Password Generator
        </h1>
        <pre>
            Sponsored by PHP 8
        </pre>
    </header>

    <main class="container">
        <div class="row p-4">
            <?php if (!isset($_SESSION['password'])) { ?>
                <div class="alert alert-warning" role="alert">
                    Non è stata generata alcuna password, tornare <a href="./index.php">alla pagina precedente per generarne una nuova </a>.
                </div>
            <?php } else { ?>
                <div class="alert alert-info" role="alert">
                    La password generate è : <?php echo $_SESSION['password']?>
                </div>
            <?php } ?>
        </div>
    </main>

</body>
</html>