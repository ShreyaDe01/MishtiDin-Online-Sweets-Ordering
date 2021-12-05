<?php 
include('dbconnection.php');
session_start();


if(isset($_SESSION['cart'])){
    //print_r($_SESSION['cart']);
    if($count = count($_SESSION['cart'])){
        $n = count($_SESSION['cart']);
        $mail = $_SESSION['user_name'];

        $list = json_encode($_SESSION['cart']);
        $sql = "INSERT INTO `shoppingcart` (`emailID`, `CartID`, `CreatedOn`, `CreatedAt`, `no_of_items`, `list_of_items`) 
        VALUES ('$mail', NULL, CURRENT_DATE(), CURRENT_TIME(), '$n', '$list')";
        $insert = mysqli_query($conn, $sql);
    }
}

session_unset();
session_destroy();

echo "<script>
    alert('Logged Out Succesfully!');
    window.location.href ='../index.php';
    </script>";

?>