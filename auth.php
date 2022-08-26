<?php
include 'db_main/db_con.php';
//reqiest the form
$post1="'".$_POST['em']."'";
$post2="'".$_POST['pa']."'";
//form sql request
$sql="SELECT * FROM  `users_login` WHERE `email`=$post1 and `password`=$post2";
$result = mysqli_query($db, $sql);
//check the null rows (=no account) redirect back
if(is_null(mysqli_fetch_assoc($result))){header("Location: ../pages/pers.php?err=1");}

//remember id of last row
$sql="SELECT * FROM  `users_login` WHERE `email`=$post1 and `password`=$post2";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $id=$row["id"];
  }

//count session (warn! unsecure, sumplified)
$i=0;
$sql="SELECT * FROM  `user_session`";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_assoc($result)) {
    $i++;
  }
$i++;
//add new session to db and to cookie
$sql="INSERT INTO `user_session`(`id_session`, `id_login`) VALUES ($i,$id)";
$result = mysqli_query($db, $sql);

setcookie("session", $i, time()+3600,'/');

include 'db_main/db_close.php';
header("Location: ../pages/pers_data.php");
?>
