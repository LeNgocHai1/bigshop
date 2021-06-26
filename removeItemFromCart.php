<?php
    session_start();
?>

<?php
    require_once "config.php";
    require_once "models/db.php";
    require_once "models/product.php";
?>

<?php

    if(isset($_GET['ID'])==TRUE) {

        // Nếu chưa có cart, thì quay lại trang cart.php.
        if(isset($_SESSION['cart'])==FALSE) {
            header("Location:cart.php");
        }

        // Nếu có cart:
        foreach($_SESSION['cart'] as $item => $detail) {
            if($detail['ID']==$_GET['ID']) {
                unset($_SESSION['cart'][$item]);

                // Nếu cart không còn gì, xóa cart:
                if(count($_SESSION['cart'])==0) {
                    unset($_SESSION['cart']);
                    unset($_SESSION['totalPriceOfCart']);
                }
                
                header("Location:cart.php");
            }
        }
    }
?>