<?php
include 'db_main/db_con.php';
$id_cat="";


if(isset($_GET['id'])){
  $id_cat=$_GET['id'];
  $sql="SELECT * FROM `item_goods` where `id_cat`=$id_cat";
}else{
  $sql="SELECT * FROM `item_goods`";
}

include "../mods/card.php";
$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result)) {
  card($row["id"],$row["name"],$row["price"],$row["img"]);
  }
include 'db_main/db_close.php';
?>
