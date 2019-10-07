<?php
include '../conn.php';

$advid = $_REQUEST['adid'];

$sql = "delete from adv where id = ".$advid;
if ($conn->query($sql)) {
  //刪除成功
  return 1;
}else {
  //刪除失敗
  return 0;
}
