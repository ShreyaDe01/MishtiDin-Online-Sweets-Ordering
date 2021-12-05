<?php
    include('admin/dbconnection.php');
    include('header.php');
?>

<?php 
    $Name = $_SESSION['user_name'];
    $sql = "SELECT * FROM `customer` WHERE `emailID` = '$Name'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
?>
<center><h1>Welcome <?php echo $row['Name'];?>!</h1></center>

<?php
    if( isset($_POST['button1'])) {
        $nm = $_POST['newName'];
        $query1 = "UPDATE `customer` SET `Name` = '$nm' WHERE `customer`.`emailID` = '$Name'";
        $res1 = mysqli_query($conn, $query1);
        echo "<script>alert('Name changed successfully!');
                      window.location.href='MyAccount.php';
              </script>";
    }
    else if( isset($_POST['button2'])) {
      $c = (int)$_POST['new_phone'];
      $query2 = "UPDATE `customer` SET `phoneNo` = '$c' WHERE `customer`.`emailID` = '$Name'";
      $res2 = mysqli_query($conn, $query2);
      echo "<script>alert('Phone No. changed successfully!');
                   window.location.href='MyAccount.php';
              </script>";
    }
?>
<div class="container" id = "account">
<form method="POST">
<div class="row mb-2">
    <label for="Name" class="col-sm-2 col-form-label" style="padding-top:1.2rem">Name </label>
    <div class="col-sm-10">
    <div class="input-group mb-3">  
      <input type="text" class="form-control" placeholder="Default input" name="newName"
      value="<?php echo $row['Name']?>">
      <button class="btn btn-outline-dark" name="button1" type="submit" style="height: 3rem;margin-top: 0.5rem;">Change</button>
        </div>
    </div>
  </div>

  <div class="row mb-2">
    <label for="Email" class="col-sm-2 col-form-label">Email Id</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" placeholder="Default input" 
      value="<?php echo $row['emailID']?>" readonly >
    </div>
  </div>
  <div class="row mb-2">
    <label for="Phoneno" class="col-sm-2 col-form-label" style="padding-top:1.2rem">Phone no</label>
    <div class="col-sm-10">
        <div class="input-group mb-3">
        <input type="number" class="form-control"
        value="<?php echo $row['phoneNo']?>"  name="new_phone">
        <button class="btn btn-outline-dark" name="button2" type="submit"style="height: 3rem;margin-top: 0.5rem;">Change</button>
        </div>
    </div>
  </div>
</form>


<h2 id = "prevOrders">Previous Orders</h2>
<div class="container" id="orders">
<table class="table table-bordered border-dark">
  <thead class="table-info">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">No. Of Items</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php //SQL query to get items 
          $sql = "SELECT * FROM `orders` WHERE `customer_emailID`='$Name'";
          //execute the query
          $res3 = mysqli_query($conn, $sql);
          while($row=mysqli_fetch_assoc($res3)){ ?>
    <tr>
      <th scope="row"><?php echo $row['order_id'];?></th>
      <td><?php echo $row['no_of_items'];?></td>
      <td>₹<?php echo $row['tot_amt'];?></td>
      <td><?php echo $row['order_date_time'];?></td>
      <td><?php echo $row['status'];?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

</div>