<?php
include '../conn.php';

$gid = $_REQUEST['gid'];

$sql = "delete from goods where id = ".$gid;
if ($conn->query($sql)) {

  return 1;
}else {

  return 0;
}
?>