<?php

require 'firebase/firebase.php';

$products = $database->getReference('products')->getValue();

echo "<h1>Daftar Produk</h1>";

foreach ($products as $product) {
    echo "<p>";
    echo $product['nama']." - Rp".$product['harga']." - Stok: ".$product['stok'];
    echo "</p>";
}