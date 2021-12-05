<?php
  include ('admin/dbconnection.php');
  include ('header.php');
?>

<div class="container-fluid" style="padding-left:0%; padding-right:0%">
    <img class = "img-fluid" src = "Images/Choco&Candies Banner.jpg">
</div>
<br><br>

<h1>Baked Items</h1>
<br><br>

<div class="container" id = "products3">
      <!--row1-->
      <div class="row">
        <?php
          //SQL query to get items 
          $sql = "SELECT * FROM `items` WHERE `Category`='chocolates'";// WHERE `item_name` LIKE '%$search%'";
          //execute the query
          $res = mysqli_query($conn, $sql);
          while($row=mysqli_fetch_assoc($res)){
        ?>
          <div class="col-sm-3">
            <div class="card">
                <img src="Images/<?php echo $row['item_img'];?>" class="card-img-top" alt="Image Not Found">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $row['item_name'];?></h3>
                  <h4 class="card-text">₹<?php echo $row['price'];?> <?php echo $row['weight'];?></h4>

                  <!--View Item details-->
                  <form class="form-submit" action="product.php" method="post">
                    <input type ="hidden" name="pid" value ="<?php echo $row['item_id'];?>">
                    <center><button id="viewItem" class="btn" name="view" type ="submit">View</button></center>
                  </form>
                </div>
                <div class="card-footer" style="background-color: #8a0314">
                  <!--add item details to cart-->
                  <form class="form-submit" action="cart_process.php" method="post">
                    <input type ="hidden" name="pid" value ="<?php echo $row['item_id'];?>">
                    <input type ="hidden" name="pname" value ="<?php echo $row['item_name'];?>">
                    <input type ="hidden" name="pprice" value ="<?php echo $row['price'];?>">
                    <input type ="hidden" name="pimage" value ="<?php echo $row['item_img'];?>">
                    <input type ="hidden" name="pweight" value ="<?php echo $row['weight'];?>">
                    <input type ="hidden" name="pqty" value ="1">
                    <button id ="addItem" class="btn" name="AddtoCart" type ="submit" style="background-color: #8a0314 ;">Add to Cart</button>
                  </form>  
                </div>
            </div>
                      
          </div>  
        <?php } ?>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <!--row2-->
        <div class="row">
        <div class="col-sm-3">
            <div class="card">
              <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
         <!--row3-->
         <div class="row">
         <div class="col-sm-3">
            <div class="card">
              <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Cadbury Celebrations</h3>
                <h4 class="card-text">₹100 186.6gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
         <!--row4-->
         <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/candies.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Christmas Chocolate Candies</h3>
                <h4 class="card-text">₹200 250gm</h4>
                <center><a href="#" class="btn">View</a></center>
              </div>
                <div class="card-footer" style="background-color: #8a0314 ;"><a href="" class="btn" 
                style="background-color: #8a0314 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
</div>
<br><br>
<?php
    include ('footer.php');
?>