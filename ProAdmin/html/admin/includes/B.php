<?php
include "../db.php";
$query="SELECT * FROM users where bg='B+' ";
$result=mysqli_query($connection,$query);

if (!$result) {
  die("error".mysqli_error($connection));
}

include "includes/table.php";
include "includes/delete.php";

  DeleteUSER("location:users.php");
 ?>
