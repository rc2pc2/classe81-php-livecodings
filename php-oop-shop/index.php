<?php
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/ShoppingCart.php';
    require_once __DIR__ . '/Models/Category.php';
    require_once __DIR__ . '/Models/Products/Food.php';
    require_once __DIR__ . '/Models/Products/Toy.php';
    require_once __DIR__ . '/Models/Products/Kennel.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Shop</title>

    <!-- Bootstrap 5.2.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <?php
        $productA = new Product('Motosega', 'Motosega GG7400 da 400cv', new Category('Attrezzi da lavoro', 'nd'), true, 199.90);
        $food = new Food('Croccantini al pollo', 'Croccantini al pollo specialissimi di Nonna Pina', new Category('Gatti', 'nd'), true, 3.99, 170);
        $toy = new Toy('Osso di gomma', 'Osso di gomma che farà impazzire fido e cerbero', new Category('Cani', 'nd'), true, 12.99, 'Masticabili');
        $kennel = new Kennel('Cuccia media da esterno', 'Cuccia rivestita in lana di vetro per coccolare adeguatamente il vosto amatissimo fido', new Category('Cani', 'nd'), true, 89.99, 150);

        $cart = new ShoppingCart($productA, $food, $toy, $kennel);

    ?>
</head>
<body>
    <header>
        <h1>
            Shopping cart
        </h1>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h2>Prodotti:</h2>
            </div>
        </div>
        <div class="row justify-content-around">
            <?php foreach ($cart->getProducts() as $product) { ?>
                <div class="col-3 card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $product->name; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $product->description; ?>
                        </p>
                        <p class="card-text">
                            <?php echo $product->getPrice(); ?>
                        </p>

                        <?php if (!is_null($product->getSpecialStuff())){ ?>
                            <p class="card-text">
                                <?php echo $product->getSpecialStuff(); ?>
                            </p>
                        <?php } ?>

                        <a href="#" class="btn btn-primary">
                            Aggiungi al carrello
                        </a>
                    </div>
                </div>
            <?php }  ?>
        </div>
    </main>

</body>
</html>