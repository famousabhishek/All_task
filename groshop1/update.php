
<?php

 include("connect.php");
  error_reporting(0);
$id=$_GET['id'];
$query="SELECT * FROM stock_management WHERE Id='$id'";
$deta=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($deta);
?>

<html>
<head>

    <style>
        body {
            background-image: url('img1.jpg');
            background-size: cover;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        
        .add {
            background-color: blue;
            padding: 20px;
            margin-top: 50px;
            border: 2px solid black;
            max-width: 400px; 
            margin: auto;
            box-sizing: border-box;
        }
        
        button {
            background-color: lightgreen;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            margin-top: 20px;
            cursor: pointer;
            font-size: large;
        }
        
        button:hover {
            padding-bottom: 10px;
            border: 2px solid black;
        }
        
        .item {
            font-weight: bold;
            color: white;
            font-size: large;
        }
        
        input {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="add">
        <form method="GET">
            <input type="hidden" name="id"  value="<?php echo $result['Id']; ?>">
            <label class="item">PRODUCT NAME:</label><br>
            <input type="text" name="item_name" placeholder="PRODUCT NAME" value="<?php echo $result['PRODUCT_NAME'] ?>" ><br>
            <label class="item">BRAND NAME:</label><br>
            <input type="text" name="brand_name" placeholder="BRAND NAME" value="<?php echo $result['BRAND_NAME'] ?>"><br>
            <label class="item">QUANTITY:</label><br>
            <input type="number" name="quantity" placeholder="QUANTITY" value="<?php echo $result['QUANTITY']?>" ><br>
            <label class="item">PURCHASE DATE:</label><br>
            <input type="date" name="purchase_date" value="<?php echo $result['PURCHASE_DATE'] ?>"><br>
            <label class="item">PURCHASE PRICE:</label><br>
            <input type="number" name="purchase_price" placeholder="PURCHASE PRICE" value="<?php echo $result['PURCHASE_PRICE']?>"><br>
            <label class="item">SELLING PRICE:</label><br>
            <input type="number" name="selling_price" placeholder="SELLING PRICE" value="<?php echo $result['SELLING_PRICE'] ?>" ><br>
            <label class="item">EXPIRE DATE:</label><br>
            <input type="date" name="expire_date" value="<?php echo $result['EXPIRE_DATE'] ?>"><br>
            <input type="submit" name="update" value="Update" />
            <input type="submit" name="delete" value="Buy" />
        </form>
    </div>
</body>
</html>


<?php
include("connect.php");
error_reporting(0);

if(isset($_GET['update']))
{
    $id = $_GET['id'];
    $pname = $_GET['item_name'];
    $pbrand = $_GET['brand_name'];
    $pq = $_GET['quantity'];
    $pud = $_GET['purchase_date'];
    $pp = $_GET['purchase_price'];
    $psp = $_GET['selling_price'];
    $ped = $_GET['expire_date'];

    $sql = "UPDATE `stock_management` SET `PRODUCT_NAME`='$pname', `BRAND_NAME`='$pbrand', `QUANTITY`='$pq', `PURCHASE_DATE`='$pud', `PURCHASE_PRICE`='$pp', `SELLING_PRICE`='$psp', `EXPIRE_DATE`='$ped' WHERE `Id`='$id'";
    $data = mysqli_query($conn, $sql);

    if($data)
    {
        echo "<script>alert('Record updated')</script>";
        header("Location: http://localhost:7882/groshop1/index.php");
        exit();
    }
}
?>