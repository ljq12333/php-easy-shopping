<?php
function getUserNameById($conn,$user_id){
      $sql = "select * from user where id = ".$user_id;
      $result = $conn->query($sql);
      if ($result->num_rows>0) {
        while ($row = $result->fetch_assoc()) {
          return $row['uname'];
        }
      }
}
//尋找商品名稱
function getGoodsNameById($conn,$goods_id){
  $sql = "select * from goods where id = ".$goods_id;
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
      return $row['goods_name'];
    }
  }
}
//尋找商品單價
function getGoodsPriceById($conn,$goods_id){
  $sql = "select * from goods where id = ".$goods_id;
  $result = $conn->query($sql);
  if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
      return $row['price'];
    }
  }
}
//把頭像傳到資料庫
function updateAvatar($conn,$user_id,$file_name){
  $sql = "update user set avatar = '/user/touxiang/".$file_name."' where id = ".$user_id;
  if ($result=$conn->query($sql)) {
    //上傳成功
    return true;
  }else {
    return false;
  }
}
?>