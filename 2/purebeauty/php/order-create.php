<?php
        session_start();
        $username = filter_var(trim($_COOKIE['user']),FILTER_SANITIZE_STRING);
        $id = filter_var(trim($_COOKIE['id']),FILTER_SANITIZE_STRING);
        $products = '';
        foreach( $_SESSION['cart-list'] as $product) {
            if ($products == '') {
                $products .= $product['name'];
            } else {
                $products .= ', ' . $product['name'];
            }
        }
        $address = $_POST['city'] . ', ' . $_POST['street'] . ', ' . $_POST['house-number'] . ', ' . $_POST['more'];
        $payment = filter_var(trim($_POST['paym-method']),FILTER_SANITIZE_STRING);
        $sumprice = $_SESSION['sum-price'];
        $email = filter_var(trim($_COOKIE['email']),FILTER_SANITIZE_STRING);
    
        $mysql = new mysqli('localhost','root','','purebeauty'); 
    
        $mysql->query("INSERT INTO `orders` (`user_name`, `user_id`, `products`, `address`,`payment_method`,`sum`,`email`) VALUES('$username','$id', '$products', '$address','$payment','$sumprice','$email')") ;
        $_SESSION = array();
        $_SESSION['order-status'] = true;

        $mysql->close();
    
        header("Location: ".$_SERVER['HTTP_REFERER']);
?>