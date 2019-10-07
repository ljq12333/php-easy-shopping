<?php
include '../conn.php';
$order_id = $_REQUEST['order_id'];
try{
    $sql = sprintf("update orders set status='已出貨' where id=%s", $order_id);
    $result = $conn->query($sql);
    $url = "http://localhost/shop/admin/orderlist.php";
    header("Location:$url");
}
catch(Exception $e){
    echo $e;
}
?>