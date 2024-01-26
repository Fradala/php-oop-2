<?php
include_once __DIR__ . '/Models/Product.php';


$cuccia = new Product('Cuccia', 'Nuova fantastica cuccia per animali', 20, 'https://media.adeo.com/marketplace/MKP/87472739/3e605ed47c9f621579548b1fb0ae6a56.jpeg?width=3000&height=3000&format=jpg&quality=80&fit=bounds' );
$crocchette = new Product('Crocchette','Crocchette per mantenere in forma', 10, 'https://www.tigota.it/media/catalog/product/b/i/big_312471_842564_01_m5lcjqgamq6r7vgh.jpg?quality=60&fit=bounds&height=700&width=700&canvas=700:700');

$products = [ $cuccia, $crocchette ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop-shoop</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <header class="container">
        <div class="row text-center mb-3 p-3">
            <div class="col-12">
                <h1>
                    Shoop
                </h1>
            </div>
        </div>
    </header>
    <main class="container">
        <section class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-3 mb-5 ">
                    <div class="card h-100">
                        <img src="<?php echo $product->imageUrl ?>" class="card-img-top img-fluid" alt="">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->name ?>
                            </h5>
                            
                            <p class="card-text">
                                <?php echo $product->description ?>
                            </p>
                           
                           
                            <a href="#" class="btn btn-primary">
                                Acquista per soli <?php echo $product->getPrice(); ?>&euro;
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </section>
    </main>
    
</body>
</html>