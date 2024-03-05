<?php
require 'connect.php';
if(isset($_POST['add_item'])) {
    $id=$_POST['id'];
    $item_name = mysqli_real_escape_string($conn, $_POST['item_name']);
    $brand_name = mysqli_real_escape_string($conn, $_POST['brand_name']);
    $quantity = $_POST['quantity'];
    $purchase_date = $_POST['purchase_date'];
    $purchase_price = $_POST['purchase_price'];
    $selling_price = $_POST['selling_price'];
    $expire_date = $_POST['expire_date'];

    
 
    $sql = "INSERT INTO `stock_management`
     (`PRODUCT_NAME`, `BRAND_NAME`, `QUANTITY`, `PURCHASE_DATE`, `PURCHASE_PRICE`, `SELLING_PRICE`, `EXPIRE_DATE`) VALUES
     ('$item_name', '$brand_name', '$quantity', '$purchase_date', $purchase_price, '$selling_price', ' $expire_date')";

    if(mysqli_query($conn, $sql)) {
        echo "<script> alert('Added successfully');</script>";
        echo "Record inserted successfully";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:7882/groshop1/index.php">
        <?php
    } else {
        echo "<script> alert('Cannot inserted');</script>";
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>

<html>
<head>

    <style>
        body {
            background-image: url('img2.jpg'); 
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
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <input type="hidden" name="id">
            <label class="item">PRODUCT NAME:</label><br>
            <input type="text" name="item_name" placeholder="PRODUCT NAME" ><br>
            <label class="item">BRAND NAME:</label><br>
            <input type="text" name="brand_name" placeholder="BRAND NAME"><br>
            <label class="item">QUANTITY:</label><br>
            <input type="number" name="quantity" placeholder="QUANTITY" ><br>
            <label class="item">PURCHASE DATE:</label><br>
            <input type="date" name="purchase_date" ><br>
            <label class="item">PURCHASE PRICE:</label><br>
            <input type="number" name="purchase_price" placeholder="PURCHASE PRICE"  ><br>
            <label class="item">SELLING PRICE:</label><br>
            <input type="number" name="selling_price" placeholder="SELLING PRICE"  ><br>
            <label class="item">EXPIRE DATE:</label><br>
            <input type="date" name="expire_date"><br>
            <input type="submit" name="add_item" value="Add" />
        </form>
    </div>
</body>
</html>
