<?php
session_start();
error_reporting(0);
if ($_GET['v'] == "addcart") {
    if (isset($_GET['id']) && isset($_GET['qty'])) {
        $id = $_GET['id'];
        $qty = $_GET['qty'];
        $_SESSION['cart'][$id] += $qty;
        header('location:cart.php');
    } else {
        echo 'error';
    }
} else if ($_GET['v'] == "updatecart") {
    if (isset($_GET['id']) && isset($_GET['qty'])) {
        $id = $_GET['id'];
        if ($_GET['qty'] == 0) {
            unset($_SESSION['cart'][$id]);
        } else {

            $qty = $_GET['qty'];
            $_SESSION['cart'][$id] = $qty;
        }

        header('location:cart.php');
    } else {
        echo 'error';
    }
} else if ($_GET['v'] == "removecartByid") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        unset($_SESSION['cart'][$id]);
        header('location:cart.php');
    } else {
        echo 'error';
    }
}
