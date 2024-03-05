
<html>
<body>
<table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>password</th>
            <th>email</th>
            <th>number</th>
            <th>date</th>
            <th>gender</th>
            <th>check</th>
            <th colspan="2" >Opertions</th>
        </tr>
    <?php

    include("connection.php");
$query="SELECT * FROM student";
$deta=mysqli_query($conn,$query);
    while ($result=mysqli_fetch_assoc($deta)) {
       echo "
       <tr style='margin:10px;'>
       <td>".$result['id']."</td>
       <td>".$result['fname']."</td>
       <td>".$result['passwor']."</td>
       <td>".$result['email']."</td>
       <td>".$result['phoNo']."</td>
       <td>".$result['dat']."</td>
       <td>".$result['gender']."</td>
       <td>".$result['check']."</td>
      <td style='width:100px; text-align:center; background-color:green; border-radius:5px;'><a style='text-decoration:none; color:white; font-weight:bold' href='update.php?id=$result[id]'>Edit/update</td>

      <td style='width:100px;  text-align:center; background-color:red; border-radius:5px;'><a style='text-decoration:none; color:white; font-weight:bold;' href='delete.php?id=$result[id]'style=width:100px onclick = 'return conforms()'> Delete</td>
      </tr> ";
       
        
    }


?>

    </table>
          <form action="#" method="GET">
         <a href="http:7882//localhost/connection/index.php"><input type="button" value="Back"></a> 
          </form>
          <!-- script -->
          <script>
  function conforms(){
   return confirm("Do you want delete record yes or not.");
  }

</script>
</body>
</html>
