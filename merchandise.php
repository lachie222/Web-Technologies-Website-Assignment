<?php
    require_once "queryDb.php";
    $products = getProducts();
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Merchandise</title>
            <link rel="stylesheet" type="text/css" href="styles.css"/>
        </head>
        <body>
            <div class="header">
                <a href="index.html"><img src="assets/logo.png" alt="Band Logo"/></a>
                <div class="navbar">
                  <a href="index.html">Home</a>
                  <a href="newreleases.html">New Releases</a>
                  <a href="tour.php">Tour Dates</a>
                  <a class="active" href="merchandise.php">Merchandise</a>
                  <a href="mailinglist.html">Mailing List</a>
                  <a href="contact.html">Contact Us</a>
                </div>
            </div>
            <div class="merch">
                <?php 
                    foreach ($products as $product)
                    {
                ?>
                    <div class="merchitem">
                        <img src="assets/<?= $product["IMAGE"]?>.jpg" alt="<?=$product["PRODUCTNAME"]?>"">
                        <h2><?= $product["PRODUCTNAME"]?></h2>
                        <p>$<?= $product["PRICE"]?></p>
                        <a href="https://thehyv.shop/collections/kill-your-god" class="tickets">Buy</a>
                    </div>
                <?php }
                ?>
            </div>
            <footer>Copyright © 2021 Angel Failure</footer>
        </body>