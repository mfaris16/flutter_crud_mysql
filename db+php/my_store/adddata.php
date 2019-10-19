<?php

include 'conn.php';

$item_code = $_POST['item_code'];
$item_name = $_POST['item_name'];
$stok = $_POST['stok'];
$price = $_POST['price'];

$connect->query('INSERT INTO tb_item (item_code,item_name,stok,price) VALUES ("$item_code","$item_name","$stok","$price")');

?>