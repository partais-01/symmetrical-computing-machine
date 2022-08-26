<?php
include "pers_id_by_session.php";

include 'db_main/db_con.php';

  $sql="SELECT * FROM `users_login` where `id`=$i";
  $result = mysqli_query($db, $sql);
  $email="";
  $password="";
  while($row = mysqli_fetch_assoc($result)) {
      $email=$row["email"];
      $password=$row["password"];
    }
include 'db_main/db_close.php';
?>
