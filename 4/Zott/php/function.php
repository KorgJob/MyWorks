<?php

  $mysql = new mysqli('localhost','zott', 'zott', 'a0675492_zott');

  function get_product_by_id($id) {
    global $mysql;
    
      $query = $mysql->query("SELECT * FROM `goods` WHERE `goods_id`='$id' ");
      $resp = $query->fetch_assoc();

      return $resp;
  }

?>