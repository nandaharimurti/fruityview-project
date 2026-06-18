<?php

require 'firebase/firebase.php';

$data = [
    'nama' => 'Jeruk',
    'harga' => 20000,
    'stok' => 50
];

$database->getReference('products')->push($data);

echo "Data berhasil ditambahkan!";