<?php
    session_start(); 

    include('db.php');

    $order_number = rand(1, 500);
    
    $link = mysqli_connect("localhost", "root", "", "shopz");
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
        $goods_id = $product['goods_id'];
        $goods_count = $_POST[$goods_id];

        $result2 = $mysql->query("SELECT * FROM `goods` WHERE `goods_id` = '$goods_id'");
        $finishresult = $result2->fetch_assoc();

    
        $goods_price = $finishresult['price'];
        $goods_price_int = intval(preg_replace('/[^0-9]+/', '', $goods_price), 10);
        $goods_sumprice = $goods_price_int * $goods_count;
        $goods_sumprice_symbol = $goods_sumprice.' ₽';

        $mysql->query("INSERT INTO `orders` (`order_number`, `goods_id`, `goods_count`, `user_id`, `order_status`, `total_sum`, `date_order`) VALUES ('$order_number','$goods_id','$goods_count','$user_id','В отправке!', '$goods_sumprice_symbol','$date')");
        $mysql->query("UPDATE `goods` SET `count` = `count`-'$goods_count' WHERE `goods_id` = '$goods_id'");

    }

    $mysql->close();

    header('Location: /pages/personal.php');
?>