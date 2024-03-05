
<?php

 include("connection.php");
  error_reporting(0);
  
  $id=$_GET['id'];

$query="SELECT * FROM student where id='$id'";
$deta=mysqli_query($conn,$query);
$total=mysqli_num_rows($deta);
$result=mysqli_fetch_assoc($total);
  

?>
<html >
<body>
<h1>Payment Form</h1>
     <br><br>
    <form action="#" method="get">

      <input type="hidden" name="stu_id" value="<?php echo $result['id'] ?>" > <br>
     Enter your name : <input type="text" name="fname" value="<?php echo $result['fname'] ?>" placeholder="Full Name :" />  <br>
     Enter password : <input type="password" name="fpassword" value="<?php echo $result['passwor']  ?>" placeholder="password :"/>  <br>
     Enter your email : <input type="email" name="femail" value="<?php echo $result['email']  ?>" placeholder="E-mail :"/>  <br>
     Enter phone number : <input type="number" name="fnumber" value="<?php echo $result['phoNo']  ?>" placeholder="Phone Number :"/>  <br><br>
    
     date of birth : <input type="date" name="fdate" value="<?php echo $result['dat']  ?>"/>  <br>
    <fieldset class=" field">
        <legend>Gender</legend>
     Male : <input type="radio" name="fradio" value="male" required <? php if ($result[gender]=="male") {echo "checked";}?> 


     Female : <input type="radio" name="fradio" value="fmale" required <?phpif ($result[gender]=="fmale") {echo "checked";}?> 
    </fieldset><br>
    1.Cash on delivery :<input type="checkbox" name="ta" value="Cash on delivery"  >  &nbsp;&nbsp;&nbsp;
     2.Credite card :
     <input type="checkbox" name="ta" value="Credite card"> </p>  <br>
     <input type="submit" name="fsubmit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 
    </form>
    
    
</body>
</html>


<?php
if($_GET['fsubmit'])
{
$id=$_GET['stu_id'];
$fname=$_GET['fname'];
$fpassword=$_GET['fpassword'];
$femail=$_GET['femail'];
$fnumber=$_GET['fnumber'];
$fdate=$_GET['fdate'];
$fradio=$_GET['fradio'];
$checkbox=$_GET['ta'];


$sql="UPDATE `student` SET `id`='$id',`fname`='$fname',`passwor`='$fpassword',`email`='$femail',`phoNo`='$fnumber',`dat`='$fdate',`gender`='$fradio',`check`='$checkbox' WHERE `id`='$id'";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "<script>alert('record updated')</script>";
  ?>
  <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http:7882//localhost/connection/newfile.php">
  <?php
}
}
?>


<!-- include("connection.php");
  error_reporting(0);
  
  $an=$_POST['fname'];
  $bn=$_POST['fpassword'];
  $cn=$_POST['femail'];
  $dn=$_POST['fnumber'];
  $en=$_POST['fdate'];
  $fn=$_POST['fradio'];


$sql="UPDATE `student` SET `fname`='$an',`passwor`='$bn',`email`='$cn',`phoNo`='$dn',`dat`='$en',`gender`='$fn' WHERE `id`='id'";
$result=mysqli_query($conn,$sql);

if($result>0)
{
    while($row=mysqli_fetch_assoc($result))
    {

    }
} -->
