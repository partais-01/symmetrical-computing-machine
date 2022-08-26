<?php
include 'db_main/db_con.php';
  $id=$_GET['id'];
  $sql="SELECT * FROM `item_goods` where `id`=$id";

include "../mods/card.php";
$result = mysqli_query($db, $sql);

while($row = mysqli_fetch_assoc($result)) {
  $img = $row["img"];
  $name = $row["name"];
  $descr = $row["descr"];
  $price = $row["price"];
  echo"<h2>$name</h2>";
  echo"<table><tr><td style='width:30%; border: 0px solid black;'>
  <img src='../pictures/$img.jpg' style='width:100%; border-radius: 5px;'></td><td style='border: 0px solid black;'>";
  echo"<p>$descr</p>";
  echo"<p>$price.00₽</p>";
  echo " <form method='post' action='../act/add.php?id=$id'><input class='add_button' type='submit' value='Добавить в корзину'></form></td></tr></table>";
  }
include 'db_main/db_close.php';
?>
