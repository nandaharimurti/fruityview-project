<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../../firebase/firebase.php';

class ProductModel
{
    private $database;

    public function __construct()
    {
        global $database;
        $this->database = $database;
    }


    public function getAllProducts()
    {
        $products = $this->database->getReference('products')->getValue();
        return is_array($products) ? $products : [];
    }
}