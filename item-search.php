<?php
    include('admin/dbconnection.php');
    include('header.php');
?>
<br><br>
<div class="container">
    <h1>Search Results</h1>
    <br><br>
    <div class="row">
    <?php
        //get the search keyword
        $search = $_POST['searchkey'];

        //SQL query to get items based on search 
        $sql = "SELECT * FROM `items` WHERE `item_name` LIKE '%$search%' OR `Category` LIKE '%$search%'";
        //execute the query
        $res = mysqli_query($conn, $sql);
        //count rows
        $count = mysqli_num_rows($res);

        //check whether item is available or not
        if($count > 0){
            //item available
            while($row=mysqli_fetch_assoc($res)){
                //get the item cards
                $pid = $row['item_id'];
                $img = $row['item_img'];
                $pname = $row['item_name'];
                $pprice = $row['price'];
                $pweight = $row['weight'];
                ?>
                
                <div class="col-sm-3">
            <div class="card">
                <img src="Images/<?php echo $img;?>" class="card-img-top" alt="Image Not Found">
                <div class="card-body">
                  <h3 class="card-title"><?php echo $pname;?></h3>
                  <h4 class="card-text">₹<?php echo $pprice;?> <?php echo $pweight;?></h4>

                  <!--View Item details-->
                  <form class="form-submit" action="product.php" method="post">
                    <input type ="hidden" name="pid" value ="<?php echo $pid;?>">
                    <center><button id="viewItem" class="btn" name="view" type ="submit">View</button></center>
                  </form>
                </div>
                <div class="card-footer" style="background-color: rgb(119, 49, 2);">
                  <!--add item details to cart-->
                  <form class="form-submit" action="cart_process.php" method="post">
                    <input type ="hidden" name="pid" value ="<?php echo $pid;?>">
                    <input type ="hidden" name="pname" value ="<?php echo $pname;?>">
                    <input type ="hidden" name="pprice" value ="<?php echo $pprice;?>">
                    <input type ="hidden" name="pimage" value ="<?php echo $img;?>">
                    <input type ="hidden" name="pweight" value ="<?php echo $pweight;?>">
                    <input type ="hidden" name="pqty" value ="1">
                    <button id ="addItem" class="btn" name="AddtoCart" type ="submit">Add to Cart</button>
                  </form>  
                </div>
            </div>
                      
          </div>  

                <?php
            } 
        }
        else{
            //item not available
            echo ' <div class="alert alert-danger 
                alert-dismissible fade show" role="alert">
                <h3><strong>Sorry!</strong> Item not Found </h3>
                </div> ';
        }
    ?>

    </div>

</div>

<br><br>
<?php
    include('footer.php');
?>