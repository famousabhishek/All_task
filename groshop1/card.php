
<html>
<body>
<table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>PRODUCT_NAME</th>
            <th>BRAND_NAME</th>
            <th>QUANTITY</th>
            <th>PURCHASE_DATE</th>
            <th>PURCHASE_PRICE</th>
            <th>SELLING_PRICE</th>
            <th>EXPIRE_DATE</th>
            <th colspan="2" >Opertions</th>
        </tr>
    <?php

    include("connect.php");
    $id=$_GET['id'];
$query="SELECT * FROM stock_management";
$deta=mysqli_query($conn,$query);
    while ($result=mysqli_fetch_assoc($deta)) {
       echo "
       <tr style='margin:10px;'>
       <td>".$result['Id']."</td>
       <td>".$result['PRODUCT_NAME']."</td>
       <td>".$result['BRAND_NAME']."</td>
       <td>".$result['QUANTITY']."</td>
       <td>".$result['PURCHASE_DATE']."</td>
       <td>".$result['PURCHASE_PRICE']."</td>
       <td>".$result['SELLING_PRICE']."</td>
       <td>".$result['EXPIRE_DATE']."</td>
      </tr> ";
           
    }
?>
<!-- <br><br>
<button><a href="index.php">Back to Home</a></button> -->
    </table>
         <a href="http://localhost:7882/groshop1/index.php"><input type="button" value="Back"></a> 

</body>
</html>
