<?php 
    require_once __DIR__ . "/classes/tech.php";
    require_once __DIR__ . "/classes/paint.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- istanza oggetti -->
    <?php 
        $generic = new Product("Prodotto", "Marca", 5);
        $phone = new Tech("Smartphone", "Samsung", 800, "S20");
        $paint = new Paint("Vernice", "MaxMeyer", 10, "Rosso");
    ?>

    <section>
        <h2>Prodotto generico</h2>
        <p>Tipo di prodotto: <strong><?php echo $generic->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $generic->getBrand(); ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $generic->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 20%: <strong><?php echo $generic->getDiscountPrice(20); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $generic->getFullName(); ?></strong></p>
    </section>

    <section>
        <h2>Prodotto Tech</h2>
        <p>Tipo di prodotto: <strong><?php echo $phone->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $phone->getBrand(); ?></strong></p>
        <p>Modello del prodotto: <strong><?php echo $phone->model; ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $phone->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 40% - 10€: <strong><?php echo $phone->getDiscountPrice(40); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $phone->getFullName(); ?></strong></p>
    </section>

    <section>
        <h2>Prodotto Paint</h2>
        <p>Tipo di prodotto: <strong><?php echo $paint->getType(); ?></strong></p>
        <p>Marca del prodotto: <strong><?php echo $paint->getBrand(); ?></strong></p>
        <p>Colore del prodotto: <strong><?php echo $paint->color; ?></strong></p>
        <p>Prezzo del prodotto: <strong><?php echo $paint->getPrice(); ?> €</strong></p>
        <p>Prezzo con sconto 30%: <strong><?php echo $paint->getDiscountPrice(30); ?> €</strong></p>
        <p>Nome completo: <strong><?php echo $paint->getFullName(); ?></strong></p>
    </section>
</body>
</html>