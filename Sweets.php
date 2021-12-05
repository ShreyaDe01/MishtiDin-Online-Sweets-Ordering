<?php
  include ('admin/dbconnection.php');
  include ('header.php');
?>

<div class="container-fluid" style="padding-left:0%; padding-right:0%">
    <img class = "img-fluid" src = "Images/Sweets Banner.jpg">
</div>
<br><br>

<h1>Sweets</h1>
<br><br>

<div class="container" id = "products1">
      <!--row1-->
        <div class="row">
        <?php
          //SQL query to get items 
          $sql = "SELECT * FROM `items` WHERE `Category`='sweets'";
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
                <div class="card-footer" style="background-color: #792d16">
                  <!--add item details to cart-->
                  <form class="form-submit" action="cart_process.php" method="post">
                    <input type ="hidden" name="pid" value ="<?php echo $row['item_id'];?>">
                    <input type ="hidden" name="pname" value ="<?php echo $row['item_name'];?>">
                    <input type ="hidden" name="pprice" value ="<?php echo $row['price'];?>">
                    <input type ="hidden" name="pimage" value ="<?php echo $row['item_img'];?>">
                    <input type ="hidden" name="pweight" value ="<?php echo $row['weight'];?>">
                    <input type ="hidden" name="pqty" value ="1">
                    <button id ="addItem" class="btn" name="AddtoCart" type ="submit" style="background-color: #792d16 ;">Add to Cart</button>
                  </form>  
                </div>
            </div>
                      
          </div>  
        <?php } ?>
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <!--row2-->
        <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
         <!--row3-->
         <div class="row">
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Gulab Jamun</h3>
                <h4 class="card-text">₹300 1kg</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
         <!--row4-->
         <div class="row">

         
          <div class="col-sm-3">
            <div class="card">
              <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
            <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
              <div class="card-body">
                <h3 class="card-title">Kaju Katli</h3>
                <h4 class="card-text">₹275 250gm</h4>
                <center><a href="GulabJamun.php" class="btn">View</a></center>
          </div>
          <div class="card-footer" style="background-color: #792d16 ;">
            <a href="" class="btn" style="background-color: #792d16 ; color:white; text-transform:uppercase; width:100%">Add to Cart</a>
              </div>
              
            </div>
          </div>
        </div>
</div>







<br><br>
<?php
    include ('footer.php');
?>