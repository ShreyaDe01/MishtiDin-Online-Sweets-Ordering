<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
  <title>Login - MishtiDin</title>

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
      <a class="navbar-brand" href="index.php"><img src="../Images/MishtiDin Logo.jpg" style="height:50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </nav>

    <!--NavBar-->


<?php
        
    $showAlert = false; 
    $showError = false; 
    $notexists = false;
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Include file which makes the Database Connection.
        include ('dbconnection.php');   
        
        $username = $_POST["uname"]; 
        $password = $_POST["psw"]; 

                      
        $sql = "Select * from customer where emailID='$username'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result);
        
        if($num == 0){
            $notexists="User not found";
            //echo $notexists;
        }

        if($num == 1 && $notexists==false){
            $sql = "SELECT `password` FROM `customer` WHERE `emailID`='$username'";
        
            $retval = mysqli_query($conn, $sql);//hashed password retrived from database
            $row = mysqli_fetch_assoc($retval);
            $de_pass = $row['password'];
            //echo $de_pass;
            $verify = password_verify($password, $de_pass);//verify the password
            
                if ($verify) {
                    $showAlert = true; 
                    //echo $showAlert;
                }
                else{
                    $showError = "Incorrect Password"; 
                    //echo $showError;
                }
        }

    }
?>

<?php
    
    if($showAlert) {
        include ('dbconnection.php');   
        
        $name = $_POST["uname"];
        $sql = "SELECT * FROM `customer` WHERE `emailID`='$name'";
        
        $result1 = mysqli_query($conn, $sql);//hashed password retrived from database
        $row = mysqli_fetch_assoc($result1);
        $_SESSION['user_name'] = $row['emailID'];
        $_SESSION['name'] = $row['Name'];

        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            Login Successful!<br>
            <h3>Welcome '. $row['Name'].'.</h3>
            
        </div> '; 
        
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
      
     </div> '; 
   }
        
    if($notexists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $notexists.'<br>
        Create an account to login.
        
       </div> '; 
     }
     
    
?>
<center><a href="../index.php"><button type="button" class="btn btn-success"  style="width: auto;
  padding: 10px 18px;"
    >Go Back to HomePage</button></a></center>

<?php
    include("../footer.php");
?>