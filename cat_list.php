<?php
include 'db_main/db_con.php';

$sql="SELECT * FROM `categories`";
$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result)) {
  $id=$row["id"];
  $cat=$row["categories"];
  echo "<li><a href='catpage.php?cat=$cat&id=$id'>$cat</a></li>";
  }
include 'db_main/db_close.php';
?>
