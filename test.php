<?php

require 'firebase/firebase.php';

$data = [
    'nama' => 'Apel Fuji',
    'harga' => 25000,
    'stok' => 30
];

$database
    ->getReference('products')
    ->push($data);

echo "Berhasil terhubung ke Firebase!";