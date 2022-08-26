<?php
  setcookie("session", $i, time()-1,'/');
  header("Location: ../pages/pers.php")
?>
