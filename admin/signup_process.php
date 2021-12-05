<!DOCTYPE html>
<html>

<head>
  <title>Signup - MishtiDin</title>

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
    $exists=false;
        
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Include file which makes the
        // Database Connection.
        include ('dbconnection.php');   
        
        $name = $_POST["name"]; 
        $email = $_POST["email"];
        $phone = $_POST["phoneNo"];
        $password = $_POST["psw"]; 
        $cpassword = $_POST["psw-repeat"];
                
        
        $sql = "Select * from customer where Name='$name'";
        
        $result = mysqli_query($conn, $sql);
        
        $num = mysqli_num_rows($result); 
        
        // This sql query is use to check if the username is already present 
        // or not in our Database
        if($num == 0) {
            if(($password == $cpassword) && $exists==false) {
                //$hash = password_hash($password, PASSWORD_DEFAULT);
                    
                // Password Hashing is used here. 
                $sql = "INSERT INTO `customer` ( `name`, `password`, `emailID`, `phoneNo`) 
                        VALUES ('$name', '$password', '$email', '$phone')";
        
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    $showAlert = true; 
                }
            } 
            else { 
                $showError = "Passwords do not match"; 
            }      
        }// end if
    if($num>0){
        $exists="Username not available"; 
    }  
}//end if          
?>

<?php
    
    if($showAlert) {
    
        echo ' <div class="alert alert-success 
            alert-dismissible fade show" role="alert">
    
            <strong>Success!</strong> Your account is 
            now created and you can login. 
            
        </div> '; 
        
    }
    
    if($showError) {
    
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert"> 
        <strong>Error!</strong> '. $showError.'
    
      
     </div> '; 
   }
        
    if($exists) {
        echo ' <div class="alert alert-danger 
            alert-dismissible fade show" role="alert">
    
        <strong>Error!</strong> '. $exists.'
        
       </div> '; 
     }
     
    
?>
<br><br>
<center><a href="../index.php"><button type="button" class="btn btn-success"  style="width: auto;
  padding: 10px 18px;"
    >Go Back to HomePage</button></a></center>
<br><br><br>


<?php
    include("../footer.php");
?>