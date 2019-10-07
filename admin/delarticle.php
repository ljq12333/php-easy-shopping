<?php
include '../conn.php';

$article_id = $_REQUEST['aid'];

$sql = "delete from wenzhang where id = ".$article_id;
if ($conn->query($sql)) {
  return 1;
}else {
  return 0;
}
?>