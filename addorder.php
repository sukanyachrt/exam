<?php
session_start();
error_reporting(0);
if($_GET['v']=="addcart"){
    if(isset($_GET['id']) && isset($_GET['qty'])) {
        $id = $_GET['id'];
        $qty = $_GET['qty'];
    
        // Add product to session
        $_SESSION['cart'][$id] += $qty;
        header('location:cart.php');
    } else {
        echo 'error'; // Send error response if data is missing
    }
}
else if($_GET['v']=="updatecart"){
    if(isset($_GET['id']) && isset($_GET['qty'])) {
        $id = $_GET['id'];
        if($_GET['qty']==0){
            unset($_SESSION['cart'][$id]);
        }
        else{
            
            $qty = $_GET['qty'];
        
            // Add product to session
            $_SESSION['cart'][$id] = $qty;
        }
        
        header('location:cart.php');
    } else {
        echo 'error'; // Send error response if data is missing
    }
}
else if($_GET['v']=="removecartByid"){
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    
        // Remove product from session
        unset($_SESSION['cart'][$id]);
        header('location:cart.php');
        //echo $qty; // Send success response back to the client
    } else {
        echo 'error'; // Send error response if data is missing
    }
}



?>