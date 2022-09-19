<?php

  $mysql = new mysqli('localhost','root', '', 'izgorodok');

  function get_product_by_id($id) {
    global $mysql;
    
      $query = $mysql->query("SELECT * FROM `products` WHERE `products_id`='$id' ");
      $resp = $query->fetch_assoc();

      return $resp;
  }

?>