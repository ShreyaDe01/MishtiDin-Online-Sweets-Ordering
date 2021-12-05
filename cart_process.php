<?php
    include ('admin/dbconnection.php');
    session_start();
    //session_destroy();
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            //echo "Hello1<br>";
            // add to cart
            if(isset($_POST['AddtoCart'])){
                //echo "Hello2<br>";
                if(isset($_SESSION['cart'])){
                    //echo "Hello3<br>";
                    $myitems= array_column($_SESSION['cart'], 'Name');//list of exixting items in cart
                    if(in_array($_POST['pname'], $myitems)){
                        echo "<script>
                            alert('Item already added to Cart!');
                            window.history.back();
                            </script>";
                    }
                    else{
                        $count = count($_SESSION['cart']);
                        $_SESSION['cart'][$count] =  array('Name'=>$_POST['pname'], 'Price'=>$_POST['pprice'],'Img'=>$_POST['pimage'],'Wt'=>$_POST['pweight'], 'Quantity'=>$_POST['pqty']);
                        echo "<script>
                            alert('Item added to Cart.');
                            window.history.back();
                            </script>";
                    }
                }
                else
                {
                    //echo "Hello4<br>";
                    $_SESSION['cart'][0] = array('Name'=>$_POST['pname'], 'Price'=>$_POST['pprice'],'Img'=>$_POST['pimage'],'Wt'=>$_POST['pweight'], 'Quantity'=>$_POST['pqty']);
                    echo "<script>
                            alert('Item added to Cart.');
                            window.history.back();
                            </script>";
                    
                }
            }
            //remove from cart
            if(isset($_POST['remove'])){
                foreach($_SESSION['cart'] as $key=>$value){
                    if($value['Name'] == $_POST['pname']){
                        unset($_SESSION['cart'][$key]);
                        $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "<script>
                            alert('Item removed');
                            window.location.href ='MyCart.php';
                            </script>";
                    }
                }
            }
        }
?>

