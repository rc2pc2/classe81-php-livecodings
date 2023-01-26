<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords Results</title>
</head>
<body>
    <h2>
        Original paragraph:
    </h2>
    <p>
        <?php echo $_POST['paragraph']; ?>
    </p>
    <p>
        paragraph length: <?php echo strlen($_POST['paragraph']); ?>
    </p>


    <?php

    $coverWord = ' ' .str_repeat('*', strlen($_POST['badword'])) . ' ';

    // dobbiamo sostituire tutte le occorrenze della parola badword nella nostra stringa
    $changedParagraph = str_ireplace(' '.$_POST['badword'] .' ', $coverWord, $_POST['paragraph']);

    ?>

    <h2>
        Changed paragraph:
    </h2>
    <p>
        <?php echo $changedParagraph; ?>
    </p>
    <p>
        paragraph length: <?php echo strlen($changedParagraph); ?>
    </p>

</body>
</html>
