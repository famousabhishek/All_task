<?php
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbname=""
  

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <style>
    *{
        margin:0px;
        box-sizing:border-box;
        padding:0px;
    }
    body{
        margin:10px;
        background:url(img.jpg);
        width:100%;
        height:100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;


    }
    .row g-3{
      background: transparent;
      border-top-left-radius: 20px;
      border-bottom-right-radius: 20px;
      background:rgba( 0, 0, 0, .5);
    }
   
    .navbar-brand,.nav-link{
      color:white;
    } 
   #d,#h{
    color:white;
   }
  .nav-link:hover{
      color:black;
    }
 
    #d:hover{
    color:black;
   }
   #h:hover{
    color:black;
   }
   
  </style>
</head>
  <body>

  <!-- nav bar -->
  <div class="nva" style=" height:70px; background-color: rgba(33, 33, 34, 0.541); margin-top: 0px; margin: 0px -8px 0px -8px;">
    <nav  class="navbar navbar-expand-lg bg-body-tertiary,nav">
        <div class="container-fluid">
          <a id="bar" style="color:rgb(red,blue,green);" class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a id="h"  class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a id="d" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<br><br>
</div>
<!-- nav bar ending -->

<!-- form  -->

    <formv style=" margin-top: 3px; " class="row g-3">
        <div class="col-md-4">
          <label for="validationServer01" class="form-label">First name</label>
          <input type="text" class="form-control is-valid" id="validationServer01" placeholder="User Name :" required>
          <div class="valid-feedback">
            Looks good!
          </div>
          
        </div>
        <div class="col-md-4">
          <label style="margin-left:60px ;" for="validationServer02" class="form-label">Last name</label>
          <input style="margin-left:60px ;" type="text" class="form-control is-valid" id="validationServer02" placeholder="Last Name :" required>
          <div style="margin-left:60px ;" class="valid-feedback">
            Looks good!
          </div>
        </div>
        </div><hr><br><br>
        <div class="col-md-4">
         <label for="validationServerUsername" class="form-label">User email :</label>
          <div class="input-group has-validation">
           <span class="input-group-text" id="inputGroupPrepend3">@</span> 
            <input type="email" placeholder="email :" class="form-control is-invalid" id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
            <div id="validationServerUsernameFeedback" class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
       
        <div class="col-md-6">
            <label style="margin-left:60px;" for="validationServer03" class="form-label">City :</label>
          <input style="margin-left:60px;" type="text" placeholder="City :" class="form-control is-invalid" id="validationServer03" aria-describedby="validationServer03Feedback" required>
          <div style="margin-left:60px;" id="validationServer03Feedback" class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3" style="width:360px;">
          <label for="validationServer04" class="form-label">State :</label>
          <select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required>
            <option selected disabled value="">Choose...</option>
            <option>Tamil Nadu</option>
            <option>Karnatak</option>
            <option>Rajasthan</option>
            <option>Maharashtra</option>
            <option>Bihar</option>
            <option>Punjab</option>
            <option>Gujarat</option>
          </select>
          <div id="validationServer04Feedback" class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3 "style="margin:7px 10px 10px 6px; ">
          <label style="margin-left:50px;" for="validationServer05" class="form-label">Zip</label>
          <input style="margin-left:50px; margin-top: 7px;"  type="text" class="form-control is-invalid" id="validationServer05" aria-describedby="validationServer05Feedback" required>
          <div style="margin-left:50px;" id="validationServer05Feedback" class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
            <label class="form-check-label" for="invalidCheck3">
              Agree to terms and conditions
            </label>
            <div id="invalidCheck3Feedback" class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <br>  <br>  <br>
        <div class="col-12">
          <button style="margin-left: 50%;" class="btn btn-primary" type="submit">Submit form</button>
        </div><br><br><br><br>
      </form>



                  <!-- form ending -->



      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="on1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="on2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="on3.jpg" class="d-block w-100" alt="...">
          </div>
          
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>