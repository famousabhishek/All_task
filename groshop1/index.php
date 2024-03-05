<?php
require 'connect.php';
$query = "SELECT * FROM stock_management";
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
mysqli_close($conn);
error_reporting(0);
?>


<html>
<head>
    <title>Stock Management System</title>
    
  <style>
    body{
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }


    header{
      color: white;
      padding: 40px;
      text-align: center;
      background-color: #4caf50;
    }
    
    .main ul{
      padding: 0;
      list-style-type: none;
    }

    .main li{
      margin-right: 10px;
      display: inline;
    }

    .navbar {
        background-color: #1C511E91;
        border-radius: 30px;

      }
      .navbar ul {
        overflow: auto;
      }
      .navbar li {
        float: left;
        list-style: none;
        margin: 13px 20px;
        margin-top:21px;
      }
      .navbar li a {
        padding: 3px 3px;
        text-decoration: none;
        color: white;
        position:inline;
        transition:all 2s;
      }
      .navbar li a:hover {
        color: black;
        font-size:18px;
        font-weight: bolder;
        transition: all 2s;
        
      }
      .search {
        float: right;
        color: white;
        padding: 12px 76px;
      }

      #search{
        margin-right:-10px;
        width:200;
        padding:6px;
      }
      .navbar input {
        border: 2px solid black;
        border-radius: 14px;
        padding: 3px 17px;
        width: 129px;
      }
    
    .add {
        background-color: blue;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 4px 2px 0px 10px;
        cursor: pointer;
        border-radius: 8px;
        display:inline-block;
    }

    .add a {
        color: white;
        text-decoration: none;
    }

    .edit:hover {
        background-color:#07E11080; 
        font-weight: 150;
        font-size:18px;
    }

    .delete:hover {
        background-color:#AF4C4C;
        font-weight: 150;
        font-size:18px;
    }

   .item-box {
     border: 1px solid #ccc;
     width:330px;
     border-radius: 8px;
     padding: 20px;
     box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
     margin-left:4px;
     display:inline-block;
   
    }
    .item-box {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
    .edit{
      background-color:#06EB0F;
      transition: all 1s;
      width:130px;
   
    }
    .delete{
      background-color:#E10B0B;
      transition: all 1s;
      width:130px;
      
    }
.item-info {
    font-family: Arial, sans-serif; 
}

.item-info h2 {
    font-size: 18px;
    margin: 0 0 10px;
    gap:100px;
}

.item-info p {
    margin: 5px 0;
}

.item-info strong {
    font-weight: bold;
}
.item-box {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

.nav{
  
}


  </style>
    
</head>
<body>
               <!-- Header -->
    <header>
    <h1>Welcome to Our Grocery Store!</h1>
    </header>

                            <!-- navbar -->

    <main>                        
    <div>
      <nav class="navbar">
        <ul>
            <li><a class="nav" href="#">Home</a></li>
            <li><a class="nav" href="#">About</a></li>
            <li><a class="nav" href="#">Services</a></li>
            <li><a class="nav" href="#">Contact us</a></li>
            <div class="search">
                <input type="text" name="search" id="search" placeholder="🔍           Search">
            </div>
        </ul>
      </nav>
       <button class="add"><a href="add.php">ADD ITEM</a></button>
    </div>



    <!-- php start -->
    <?php
require 'connect.php';

$query = "SELECT * FROM stock_management";

$result = mysqli_query($conn, $query);

if ($result) {
    // Fetching all rows into an array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // Looping through each row
    foreach ($rows as $row) {
        ?>
        <div class="item-box" style="margin-top:13px;">
            <div class="item-info">
                <h2>Product Name: <?php echo htmlspecialchars($row['PRODUCT_NAME']); ?></h2>
                <p><strong>Price:</strong> <?php echo htmlspecialchars($row['PURCHASE_PRICE']); ?></p>
                <p><strong>Quantity:</strong> <?php echo htmlspecialchars($row['QUANTITY']); ?></p>
                <p><strong>Brand:</strong> <?php echo htmlspecialchars($row['BRAND_NAME']); ?></p>
                <button class="add edit"><a href="update.php?id=<?php echo $row['Id']; ?>">EDIT</a></button>
                <button class="add delete"><a href="delete.php?id=<?php echo $row['Id']; ?>">DELETE</a></button>
                <button class="add card"><a href="card.php?id=<?php echo $row['Id']; ?>">Add TO Card</a></button>
              </div>
        </div>
        <?php
    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>

</main>

</body>
</html>




