<?php
session_start();
//session_destroy();
include('admin/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>My Cart - MishtiDin</title>

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

</body>
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

      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item" id = "log"><a class="nav-link active" href="#"><i class="material-icons-round">person</i></a>
        <div class="dropdown-content">
        <?php if(!isset($_SESSION['user_name'])){//user not logged in ?>
            <a onclick="document.getElementById('id01').style.display='block'">Login</a>
            <?php include('admin/login.php') ?>
            <a onclick="document.getElementById('id02').style.display='block'">Sign Up</a>
            <?php include('admin/signup.php') ?>
          <?php }
          else{//user logged in ?>
          <a>My Account</a>
          <a href="admin/logout.php">Logout</a>
          <?php } ?>
        </div>
        </li>
        
        <li class="nav-item"><a class="nav-link active" href="#"><i class="material-icons-round">location_on</i></a></li>
      </ul>
    </div>
  </nav>
  <!--NavBar ends-->

  <div class="container-fluid" style="padding-left:0%; padding-right:0%;">
    <img class = "img-fluid" src = "Images/Cart Banner.jpg">
</div>
<br><br>

<div class ="container">
    <table class="table table-bordered border-dark">
    <thead class="table-warning">
        <tr class="text-center">
        <th scope="col">Sl. No.</th>
        <th scope="col" colspan="2">Item</th>
        <th scope="col">Weight</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">        </th>
        </tr>
    </thead>
    <tbody class="text-center">
        <?php 
        $totalPrice = 0;
        $idx = 1;
        if(isset($_SESSION['cart'])){
            //print_r($_SESSION['cart']);
            if($count = count($_SESSION['cart'])){//add items if there are items
              foreach($_SESSION['cart'] as $key=>$value){
                  echo '<tr>
                      <td>'.$idx.'</td>
                      <td><img src="Images/'.$value['Img'].'" style="height:5rem; width:5rem;"></td>
                      <td>'.$value['Name'].'</td>
                      <td>'.$value['Wt'].'</td>
                      <td><input id= "qty" type="number" min="1" max="10" value="'.$value['Quantity'].'"></td>
                      <td>'.$value['Price'].'</td>
                      <td>
                      <form action="cart_process.php" method="post">
                          <input type ="hidden" name="pname" value ="'.$value['Name'].'">
                          <button type="submit" class="btn btn-outline-danger" name="remove">Remove Item</button>
                      </form></td>
                  </tr>';
                  $idx++;
                    $num = (int)$value['Quantity'];
                    $totalPrice = $totalPrice + (double)$value['Price']*$num;
                }
            }
        
        ?>
    </tbody>
    </table>
</div>

<div class="container">
    <div class="row" >
        <div class="col-sm-4">
            <h3>Total Items : <?php 
            if($count = count($_SESSION['cart'])){
                echo $count;
            }
            else 
                echo "0"; ?></h3>
        </div>
        <div class="col-sm-4">
            <h3>Total Amount : ₹<?php if($count = count($_SESSION['cart'])){
                echo $totalPrice;
                $_SESSION['total_amt'] = $totalPrice;
                }
                else echo"0";?>/-</h3>
        </div>
        <div class="col-sm-4">
          <?php if(isset($_SESSION['user_name'])){//user logged in
            //print_r($_SESSION['cart']);
            $_SESSION['cart-list'] = json_encode($_SESSION['cart']);
            //echo "<br>"; echo $_SESSION['cart-list'];?>
            <form method="POST" action="checkout.php">
              <input type="hidden" name="nitems" value="<?php echo $count;?>">
              <input type="hidden" name="amt" value="<?php echo $totalPrice;?>">
              <center><button type="submit" name="checkout" class="btn btn-success">Proceed to CheckOut</button></center>
            </form>
          <?php } 
                else {?>
            <center><button type="button" onclick="loginFunc()" class="btn btn-success">Proceed to CheckOut</button></center>
              <script>
                function loginFunc(){
                  alert('Login to continue.');
                  document.getElementById('id01').style.display='block';
                }
              </script>
        </div>
    </div>
</div>
            <?php }
           
        }
        else{?>
        </tbody>
    </table>
</div>

<div class="container">
    <div class="row" >
        <div class="col-sm-4">
            <h3>Total Items : 0</h3>
        </div>
        <div class="col-sm-4">
            <h3>Total Amount : ₹0/-</h3>
        </div>
        <div class="col-sm-4">
          <center><a href="index.php" class="btn" style="width:100%">Browse Items and Add to Cart</a></center>
        </div>

    </div>
</div>
        
  <?php
        }
            ?>
            </div>
      </div>
</div>
<br><br>




<?php
    include('footer.php');
?>