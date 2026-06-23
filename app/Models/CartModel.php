<?php
class CartModel
{
    public function getCart()
    {
        return $_SESSION['cart'] ?? [];
    }

    public function setCart(array $cart)
    {
        $_SESSION['cart'] = $cart;
    }

    public function clearCart()
    {
        unset($_SESSION['cart']);
    }
}