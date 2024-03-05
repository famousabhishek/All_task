<?php

include("connect.php");
  
$id=$_GET['id'];
  
$sql="DELETE FROM stock_management WHERE Id='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "Record delted in table.";
?>

  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:7882/groshop1/index.php">
  <?php
}
  ?>