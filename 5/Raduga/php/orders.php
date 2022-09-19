<?php
    session_start(); 

    include('db.php');

    $order_number = rand(1, 500);
    
    $link = mysqli_connect("localhost", "root", "", "izgorodok");
    $sql = "SELECT * FROM `orders`";
    $result = mysqli_query($link, $sql); 
    while ($row = mysqli_fetch_array($result)){
        if($order_number == $row['order_number']){
            $order_number = rand(1, 500);
        }
    }
    
    $user_id = $_COOKIE['id'];
    $price = $_POST['total_sum'];
    $date = date("Y.m.d");

    $counter = 0;

    foreach( $_SESSION['cart-list'] as $product){
        $products_id = $product['products_id'];
        $count = $_POST[$products_id];

        $result2 = $mysql->query("SELECT * FROM `products` WHERE `products_id` = '$products_id'");
        $finish = $result2->fetch_assoc();

    
        $product_price = $finish['price'];
        $product_price_int = intval(preg_replace('/[^0-9]+/', '', $product_price), 10);
        $product_sumprice = $product_price_int * $count;
        $product_sumprice_symbol = $product_sumprice.' ₽';

        $mysql->query("INSERT INTO `orders` (`order_number`, `products_id`, `count`, `user_id`, `order_status`, `total_sum`, `order_date`) VALUES ('$order_number','$products_id','$count','$user_id','Заказ оформлен!', '$product_sumprice_symbol','$date')");
        $mysql->query("UPDATE `goods` SET `count` = `count`-'$goods_count' WHERE `goods_id` = '$goods_id'");

    }

    $mysql->close();

    header('Location: /pages/personal.php');
?>