<?php

require_once 'Product.php';
require_once 'Book.php';
require_once 'Baby_car.php';

$car = new Baby_car();
$car->name = "Car Name";
$car->description = "Car Description";
$car->price = 1000;
$car->discount = 10;
$car->image = "image/71rhirbPmvL._AC_UL600_SR600,600_.jpg";
// $book = new Book();
// $book->add_publisher("Publisher 1");
// $book->add_publisher("Publisher 2");
// $book->add_publisher("Publisher 3");

//print_r($book->show_all_publishers());

//print_r($book->show_publishers_range(0, 1));

$product = new Product();
$product->name = "Product Name";
$product->description = "Product Description";
$product->price = 10;
$product->discount = 5;
$product->image = "image/71rhirbPmvL._AC_UL600_SR600,600_.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center; /* لتوسيط الكروت في الصفحة */
        gap: 20px; /* مسافة بين الكروت */
        margin: 20px;
    }
    .card {
        width: 300px; /* عرض البطاقة */
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    .card img {
        width: 100%; /* جعل العرض متناسب مع البطاقة */
        height: 200px; /* ارتفاع ثابت */
        object-fit: contain; /* عرض الصورة كاملة بدون قص */
        background-color: #f8f8f8; /* خلفية رمادية فاتحة حول الصورة */
    }
    .card-body {
        padding: 15px;
    }
    .card-title {
        font-size: 18px;
        font-weight: bold;
        margin: 0 0 10px;
    }
    .card-text {
        font-size: 14px;
        color: #555;
    }
    .card-price {
        font-size: 16px;
        font-weight: bold;
        color: #000;
        margin: 10px 0;
    }
    .card-discount {
        font-size: 14px;
        color: #f00;
        text-decoration: line-through;
    }
</style>

</head>
<body>

<?php
// Include الكود الخاص بالمنتج
require_once 'product.php';
?>

<div class="card">
    <img src="<?= $product->image ?>" alt="<?= $product->name ?>">
    <div class="card-body">
        <h3 class="card-title"><?= $product->name ?></h3>
        <p class="card-text"><?= $product->description ?></p>
        <p class="card-price">Price: $<?= $product->calprice() ?></p>
        <?php if ($product->discount > 0): ?>
            <p class="card-discount">Original Price: $<?= $product->price ?></p>
        <?php endif; ?>
    </div>
</div>

<div class="card">
    <img src="<?= $car->image ?>" alt="<?= $car->name ?>">
    <div class="card-body">
        <h3 class="card-title"><?= $car->name ?></h3>
        <p class="card-text"><?= $car->description ?></p>
        <p class="card-price">Price: $<?= $car->calprice() ?></p>
        <?php if ($car->discount > 0): ?>
            <p class="card-discount">Original Price: $<?= $car->price ?></p>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

