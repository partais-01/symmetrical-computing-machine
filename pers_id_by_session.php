<?php
include 'db_main/db_con.php';
$session = $_COOKIE['session'];
$sql="SELECT * FROM `user_session` where `id_session`=$session";
$result = mysqli_query($db, $sql);
$i="";
while($row = mysqli_fetch_assoc($result)) {
    $i=$row["id_login"];
  }
  include 'db_main/db_close.php';
  ?>
