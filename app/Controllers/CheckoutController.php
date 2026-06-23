<?php

class CheckoutController
{
    public function index()
    {
        include 'app/Views/checkout/index.php';
    }

    public function process()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return;
        }

        $nama = $_POST['nama'] ?? '';
        $alamat = $_POST['alamat'] ?? '';
        $metodePembayaran = $_POST['metodePembayaran'] ?? '';
        $total = $_POST['total'] ?? 0;

        // TODO: simpan ke Firebase

        header('Location: index.php?page=checkout-success');
        exit;
    }
}