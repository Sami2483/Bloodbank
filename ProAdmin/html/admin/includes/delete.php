<?php
function DeleteUSER($so){
  include "../db.php";
if (isset($_GET['delete']))  {
  $the_delete_id= $_GET['delete'];
  $query="DELETE FROM users where id=$the_delete_id";
  $delete_query= mysqli_query($connection,$query);

  if (!$delete_query) {
    die("error".mysqli_error($connection));
  }
  header($so);

}
}

 ?>
