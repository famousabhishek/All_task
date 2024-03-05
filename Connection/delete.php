<?php

include("connection.php");
  
  $id=$_GET['id'];
  
$sql="DELETE FROM `student` WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "Record delted in table.";
?>

  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http:7882//localhost/connection/newfile.php">
  <?php
}
  ?>