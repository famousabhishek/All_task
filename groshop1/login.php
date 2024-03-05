
<?php
include("conn.php");
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-image:url("lo.jpg");
            background-size:cover;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        #container {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            max-width: 400px;
            width: 100%;
        }
        #loginHeader {
            background-color: #4CAF50;
            color: white;
            padding: -10px;
            text-align: center;
            margin-top:-150px;
        }
        #companyLogo {
            width: 200px;  
            height: 150px;  
        }
        form {
            padding: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .submit {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size:30px;
        }
        .submit:hover {
            background-color: #45a049;
        }
        img{
          position: relative;
          top:100px;
            width:250px;
            height:350px;
        }
    </style>
    
<script>
            document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('loginForm');

            form.addEventListener('submit', function (event) {
                const email = document.getElementById('email');
                const password = document.getElementById('password');

                if (!validateEmail(email.value)) {
                    alert('Please enter a valid email address.');
                    event.preventDefault();
                    return;
                }
                if (password.value.length<=5) {
                    alert('Password must be at least 6 characters long.');
                    event.preventDefault();
                    return;
                }
            });

            function validateEmail(email) {
                const emailr = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return emailr.test(email);
            }
        });
    </script>

</head>


<!-- body start -->
<body>

<div id="container">
    <div id="loginHeader">
        <img class="imge" src="logo2.png">
        <h2>Grocery Store</h2>
    </div>

    <form id="loginForm" action="index.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="uemail" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="upassword" required>
        <br><br><br>
        <input class="submit" name="submit" id="sub" type="submit" onclick="validateForm()" value="Login">
        <!-- <button type="button" onclick="validateForm()">Login</button> -->
       
    </form>

</div>

</body>
</html>
<?php

$email=$_POST['uemail'];
$password=$_POST['upassword'];

$q="INSERT INTO logintb VALUES ('$email', '$password')";
$data=mysqli_query($con,$q);

?>