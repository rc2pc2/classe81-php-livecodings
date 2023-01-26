<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>

</head>
<body>
    <h1>
        Badwords
    </h1>

    <form action="./changed.php" method="POST">
        <textarea name="paragraph" cols="30" rows="10"></textarea>
        <input type="text" name="badword">
        <button type="submit">Send data</button>
    </form>

</body>
</html>