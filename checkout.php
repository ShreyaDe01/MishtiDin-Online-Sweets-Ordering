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
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    The payment process is meant for representational purpose only.
  </div>
</div>
<?php
if(isset($_POST['checkout'])){
    //cart details
    //echo 
    $number = $_POST['nitems'];//echo "<br>";
    //echo "list = "; echo 
    $list = $_SESSION['cart-list'];//echo "<br>";
    //echo "Total Amount = "; 
    /*echo*/ $amount = $_POST['amt'];
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