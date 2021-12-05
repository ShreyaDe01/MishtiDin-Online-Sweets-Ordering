<?php
  include ('header.php');
  include ('admin/dbconnection.php');

    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST['view'])){
      
      $id = $_POST["pid"]; 
     
      $sql  = "SELECT * FROM `items` WHERE `item_id` = '$id'";
      $result = mysqli_query($conn, $sql);
      $row=mysqli_fetch_assoc($result);
  ?>
<h2 style="font-size:1rem; text-transform:uppercase">HOME > <?php if($row['Category'] == "baked"){echo "Baked Items";}
else if($row['Category'] == "chocolates"){echo "Chocolates & Candies";}else{echo $row['Category'];} ?>
 > <?php echo $row['item_name'];?> </h2>
<center>
  
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="Images/<?php echo $row['item_img'];?>" class="img-fluid" alt="Image Not Found">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h2 class="card-title" style="text-align: center;"><?php echo $row['item_name'];?></h2>
        <h4 class="card-text">MRP : ₹<?php echo $row['price'];?> <?php echo $row['weight'];?></h4>
        <h5 class="card-heading">About the Product</h5>
        <p class="card-text"><?php echo $row['about'];?></p>
        <h5 class="card-heading">Ingredients</h5>
        <p class="card-text"><?php echo $row['ingredients'];?></p>
        <center><label for="quantity">Quantity</label>
        <input id="Quantity" type="number" min="1" max="10" name="Qi" value = "1"/>
          <button  type="button" class="btn btn-dark" onclick="increment()">+</button>
          <button type="button" class="btn btn-dark" onclick="decrement()">-</button>
          <br>
        

          <!--add item details to cart-->
          <form class="form-submit" action="cart_process.php" method="post">
            <input type ="hidden" name="pid" value ="<?php echo $row['item_id'];?>">
            <input type ="hidden" name="pname" value ="<?php echo $row['item_name'];?>">
            <input type ="hidden" name="pprice" value ="<?php echo $row['price'];?>">
            <input type ="hidden" name="pimage" value ="<?php echo $row['item_img'];?>">
            <input type ="hidden" name="pweight" value ="<?php echo $row['weight'];?>">
            <input type ="hidden" name="pqty" id = "setq" value="1">
            <button id ="addItem" class="btn" name="AddtoCart" type ="submit" style="width:80%; text-transform:uppercase; height:3rem;">Add to Cart</button>
          </form> 
        </center>
      </div>
    </div>
  </div>
</div>
<?php }}?>
</center>
<script>
  function increment() {
    document.getElementById('Quantity').stepUp();
  }
  function decrement() {
    document.getElementById('Quantity').stepDown();
  }        
</script>

           
<?php
  include ('footer.php');
?>