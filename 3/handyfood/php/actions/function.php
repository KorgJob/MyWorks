<?php

  $mysql = new mysqli('localhost','root','','handy');

  function get_product_by_id($id) {
    global $mysql;
    
      $query = $mysql->query("SELECT * FROM `goods` WHERE `goods_id`='$id' ");
      $resp = $query->fetch_assoc();

      return $resp;
  }

?>