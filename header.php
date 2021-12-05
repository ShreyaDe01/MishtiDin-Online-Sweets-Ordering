<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
  <title>Online Sweets Ordering - MishtiDin</title>

  <!--css-->
  <link rel="stylesheet" type="text/css" href="design.css">
  <link rel="stylesheet" type="text/css" href="admin/login&signup.css">
  <!--bootstrap-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&family=Lora&family=Rubik&display=swap" rel="stylesheet">
  <!--font awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
  <!--NavBar starts-->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="NavBar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images/MishtiDin Logo.jpg" style="height:50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="material-icons-round">home</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Sweets.php" target="_blank">Sweets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="BakedItems.php" target="_blank">Baked Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="Chocolates&Candies.php" target="_blank">Chocolates & Candies</a>
          </li>
        </ul>
      </div>
      <form class="d-flex" action="item-search.php" method="post">
        <input class="form-control me-3" type="search" name="searchkey" placeholder="Search products" aria-label="Search">
        <button class="btn" type="submit"><i class="material-icons-round">search</i></button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" id = "log"><a class="nav-link active"><i class="material-icons-round">person</i></a>
        <div class="dropdown-content">
          <?php if(!isset($_SESSION['user_name'])){//user not logged in ?>
            <a onclick="document.getElementById('id01').style.display='block'">Login</a>
            <?php include('admin/login.php') ?>
            <a onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
            <?php include('admin/signup.php') ?>
          <?php }
          else{//user logged in ?>
          <a href="MyAccount.php">My Account</a>
          <a href="admin/logout.php">Logout</a>
          <?php } ?>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="MyCart.php"><i class="material-icons-round">shopping_cart</i></a></li>
        <li class="nav-item"><a class="nav-link active" href="#"><i class="material-icons-round">location_on</i></a></li>
      </ul>
    </div>
  </nav>
  <!--NavBar ends-->

