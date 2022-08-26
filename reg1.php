<?php
include 'db_main/db_con.php';

$sql="SELECT * FROM `users_login`";
$result = mysqli_query($db, $sql);

$i=0;
while($row = mysqli_fetch_assoc($result)) {
    $i++;
  }
$i++;

$post1="'".$_POST['em']."'";
$post2="'".$_POST['pa']."'";
$sql="INSERT INTO `users_login`(`id`, `email`, `password`) VALUES ($i,$post1,$post2)";
$result = mysqli_query($db, $sql);

include 'db_main/db_close.php';
header("Location: ../pages/pers.php?done=1");
?>
