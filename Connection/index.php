<?php
 include("connection.php");
//  include("newfile.php");

error_reporting(0); 
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <!-- <link rel="stylesheet" href="style.css"/> -->
  <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


#main{
    padding: 200px;
    
    display: flex;
    justify-content: space-evenly;
}
.h1{
    padding: 8px;
    background-color: black;
    color: white;
    display: flex;
    justify-content: space-evenly;
}
   

.min{
    padding: 30px;
    border: 1px solid black;
    border-radius: 10px;
    border: none;
    width: 50%;
    background-color: rgba(162, 169, 175,.5);
    margin-left: 300px;
    
}
li{
   list-style: circle;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
input[type="range"],
input[type="date"]{
padding: 10px;
margin: 5px;
width: 92%;
outline: none;
}

input[type="submit"],
input[type="reset"]{
    padding: 10px;
    width: 150px;
}

form{
    margin: 0% 10% 0% 10% ;
}
h1{
    text-align: center;
}
.field{
    width: 15%;
}
.meter{
   height: 30px;
}
progress{
    width: 300px;
    padding: 15px;
}
input[type="radio"]{
width:50px;

}
#ca{
    width:60px;
}

@media (min-width:600px) and (max-width:700px)
{
    body{
        background-color: black;
        color: white;
        margin: 30px;
    }
}
@media (min-width:700px) and (max-width:800px)
{
    body{
        background-color: pink;
        color: white;
        margin: 40px;
        color: white;
    }
}

  </style>
    
<body>
   <div class="min">

    <!--heading tages --> 



   <h1>Payment Form</h1>
     <br><br>
    <form action="#" method="POST">
   ID: <input type="number" name="id" placeholder="ID:" id="ca" />  <br>
     Enter your name : <input type="text" name="uname" placeholder="Full Name :" required/>  <br>
     Enter password : <input type="password" name="upassword" placeholder="password :"required/>  <br>
     Enter your email : <input type="email" name="uemail" placeholder="E-mail :"required/>  <br>
     Enter phone number : <input type="number" name="unumber" placeholder="Phone Number :"required/>  <br><br>
    
     date of birth : <input type="date" name="date" required/>  <br>
    <fieldset class=" field">
        <legend>Gender</legend>
     Male : <input type="radio" name="radio" value="male" required> 
     Female : <input type="radio" name="radio" value="fmale" >  
    </fieldset><br>
     <p>1.Cash on delivery :<input type="checkbox" name="ta[]" value="Cash on delivery" />  &nbsp;&nbsp;&nbsp;
     2.Credite card :
     <input type="checkbox" name="ta[]" value="Credite card"/> </p>  <br>
     
     <input type="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <input type="reset">
   
  

    </form>
    <br>    <br>   
   
</div>

</body>
</html>

 <?php
if(isset($_POST['submit']))
{
   $agn=$_POST['id'];
   $an=$_POST['uname'];
   $bn=$_POST['upassword'];
   $cn=$_POST['uemail'];
   $dn=$_POST['unumber'];
   $en=$_POST['date'];
   $fn=$_POST['radio'];
   $gn=$_POST['ta'];
   $hk=implode(" ,",$gn);
$query="insert into student values ('$agn','$an','$bn','$cn','$dn','$en',' $fn','$hk')";
$data=mysqli_query($conn,$query);

if($data)
{
    ?>
    <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http:7882//localhost/connection/newfile.php">
    <?php
}

else
{
    echo "data not inserted".mysqli_connect_error();
}
}
?>
