<?php
session_start();
include('admin/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Checkout - MishtiDin</title>

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
  <link href="https://fonts.googleapis.com/css2?family=Lora&family=Rubik&display=swap" rel="stylesheet">
  <!--font awesome-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

</head>

<body>
    <!--NavBar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" id="NavBar">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="Images/MishtiDin Logo.jpg" style="height:50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </nav>

    <!--NavBar-->
<?php
if(isset($_POST['checkout'])){
    //cart details
    echo $number = $_POST['nitems'];echo "<br>";
    echo "list = "; echo $list = $_SESSION['cart-list'];echo "<br>";
    echo "Total Amount = "; echo $amount = $_POST['amt'];
    //customer details
    $email = $_SESSION['user_name'];
    $sql1 = "SELECT * FROM `customer` WHERE `emailID` = '$email'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    
?>
<div class="container">
    <h2>Enter Delivery Details</h2>
<form class="row g-3" method="POST" action="out.php">
  <div class="col-md-6">
    <label for="inputName" class="form-label">Name</label>
    <?php $email = $_SESSION['user_name'];
    $sql1 = "SELECT * FROM `customer` WHERE `emailID` = '$email'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);?>
    <input type="text" class="form-control" name="inputName" value="<?php echo $row1['Name'];?>">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <textarea type="text" class="form-control" name="inputAddress" placeholder="Enter Complete Address(including pincode)"></textarea>
  </div>
  <div class="col-md-6">
    <label for="inputPhone" class="form-label">Phone no.</label>
    <input type="number" class="form-control" name="inputPhone" value="<?php echo $row1['phoneNo'];?>">
  </div>
  <div class="col-12">
      <input type="hidden" name = "num_items" value="<?php echo $number;?>">
      <input type="hidden" name = "list_items" value="<?php echo $list;?>">
      <input type="hidden" name = "total" value="<?php echo $amount;?>">
    <center><button type="submit" name ="payment" class="btn btn-primary">Make Payment</button></center>
  </div>
</form>
</div>

<br><br><br>
<?php
}
include('footer.php');
?>