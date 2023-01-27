<?php

    include_once __DIR__ . '/partials/functions.php';

    session_start();

    if (isset($_GET['passwordLength']) && intval($_GET['passwordLength'] > 0)){
        $password = generatePasswordWithoutRepeatedChars(intval($_GET['passwordLength']), $_GET['uniqueChars'], $_GET['hasChars'], $_GET['hasNumbers'], $_GET['hasSymbols']);
        $_SESSION['password'] = $password;
        header('Location: ./password.php');
    }

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
            <?php if (!isset($password)) { ?>
                <div class="alert alert-warning" role="alert">
                    Non è stata inserita alcuna password
                </div>
            <?php } else { ?>
                <div class="alert alert-info" role="alert">
                    La password generate è : <?php echo $password?>
                </div>
            <?php } ?>
        </div>

        <div class="row p-4">
            <form class="col-3">
                <div class="mb-3">
                    <label for="user-chars" class="form-label">Inserisci il numero di caratteri per la password da generare</label>
                    <input type="number" class="form-control" id="user-chars" name="passwordLength">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="uniqueChars" >
                    <label class="form-check-label" for="exampleCheck1">Ripetizione caratteri</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="hasChars" >
                    <label class="form-check-label" for="exampleCheck1">Lettere</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input"  name="hasNumbers">
                    <label class="form-check-label" for="exampleCheck1">Numeri</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="hasSymbols">
                    <label class="form-check-label" for="exampleCheck1">Simboli</label>
                </div>
                <button type="submit" class="btn btn-primary">Invia la richiesta</button>
            </form>

        </div>

    </main>

</body>
</html>