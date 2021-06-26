<?php
    session_start();
?>

<?php
    if(isset($_GET['ID'])==TRUE) {

        // Nếu chưa có cart, thì quay lại trang cart.php.
        if(isset($_SESSION['cart'])==FALSE) {
            header("Location:cart.php");
        }

        // Nếu có cart:
        foreach($_SESSION['cart'] as $k => $v) {
            if($k==$_GET['ID']) {
                unset($_SESSION['cart'][$k]);
                
                // Nếu cart không còn gì, xóa cart:
                if(count($_SESSION['cart'])==0) {
                    unset($_SESSION['cart']);
                }
                
                header("Location:cart.php");
            }
        }
    }
?>