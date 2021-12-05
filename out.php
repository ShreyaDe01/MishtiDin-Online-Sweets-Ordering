<?php 
session_start();
include('admin/dbconnection.php');


if(isset($_POST['payment'])){
    echo $number = $_POST['num_items']; echo "<br>";
    echo "list = "; echo $list = $_SESSION['cart-list']; echo"<br>";
   echo $amount = $_POST['total'];echo"<br>";
    //customer details
    echo $email = $_SESSION['user_name'];echo"<br>";
    echo $name = $_POST['inputName'];echo"<br>";
    echo $address= $_POST['inputAddress'];echo"<br>";
    echo $phone = $_POST['inputPhone'];echo"<br>";

    $sql = "INSERT INTO `orders` (`order_id`, `no_of_items`, `list`, `tot_amt`, `delivery_address`, `status`, `order_date_time`, `customer_name`, `customer_emailID`, `customer_phoneNo`) 
            VALUES (NULL, '$number', '$list', '$amount', '$address', 'Confirmed', CURRENT_TIMESTAMP(), '$name', '$email', '$phone')";
    $result = mysqli_query($conn, $sql);  
        
    $sql = "SELECT `order_id` FROM `orders` WHERE `customer_emailID` = '$email' AND `status` = 'Confirmed'";
    $retrieve = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($retrieve);
    $_SESSION['orderID'] = $row['order_id'];
    echo "<script>
          alert('Proceed to Make payment');
          window.location.href='PaytmKit/TxnTest.php';
        </script>";
    }
?>