<?php
    require_once __DIR__ . '/Models/User.php';
    require_once __DIR__ . '/Models/Membership.php';
    require_once __DIR__ . '/Models/PremiumUser.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP User</title>
</head>
<body>
    <main>
        <h1>
            PHP OOP User
        </h1>
        <pre>
            <?php

                $membershipCard = new Membership(1242321321, 'Alto');
                var_dump(new User('gino','ginetti', 33));
                var_dump(new PremiumUser('gino','ginetti', 33, $membershipCard));
            ?>
        </pre>
    </main>

</body>
</html>