<?php

include 'conn.php';

$id = $_POST['id'];
$item_code = $_POST['item_code'];
$item_name = $_POST['item_name'];
$stok = $_POST['stok'];
$price = $_POST['price'];

$connect->query("UPDATE tb_item SET item_code='".$item_code."',item_name='".$item_name."',stok='".$stok."',price='".$price."' WHERE id=".$id);

?>