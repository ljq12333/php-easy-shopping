<?php
include '../conn.php';

$uid = $_REQUEST['uid'];

$sql = "delete from user where id = ".$uid;
if ($conn->query($sql)) {
  return 1;
}else {
  return 0;
}
?>