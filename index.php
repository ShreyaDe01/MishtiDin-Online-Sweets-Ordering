<?php
  include ('admin/dbconnection.php');
  include ('header.php');
?>
          <!--HomePage Carousel starts-->    
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Images/HomePage carousel1.jpg" class="d-block w-100" alt="Image Not Found">
              </div>
              <div class="carousel-item">
                <img src="Images/Homepage carousel2.jpg" class="d-block w-100" alt="Image Not Found">
              </div>
              <div class="carousel-item">
                <img src="Images/HomePage carousel3.jpg" class="d-block w-100" alt="Image Not Found">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          <!--HomePage Carousel ends-->
<br><br>
<!--popular Orders Start-->
<div class="container" id= "Popular">
  <h1>Popular Orders</h1>
  <div class="container">
  <div class="row row-cols-md-4" style="margin: 50px auto 20px auto;">
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/gulab-jamun.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title"><a href="product.php">Gulab Jamun</a></h3>
          <h4 class="card-text">₹ 300 1kg</h4>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/kaju_katli.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title">Kaju Katli</h3>
          <h4 class="card-text">₹ 275 200gm</h4>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/cadbury-celebration-chocolate1.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title">Cadbury Celebrations Chocolate</h3>
          <h4 class="card-text">₹ 150 186.6gm</h4>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/fruitcakes.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title">Fruit Cake</h3>
          <h4 class="card-text">₹ 550 500gm</h4>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!--popular orders end -->
<br><br>
<!--Strip banner -->
<div class = "container-fluid" style="padding-left:0px; padding-right:0px; padding-top: 2rem; padding-bottom: 2rem">
  <img class="img-fluid" src="Images/HomePage strip.jpg">
</div>
<!--Strip banner -->
<br><br>
<!--categories start-->
<div class="container" id= "Category">
  <h1>Top Categories</h1>
  <div class="container">
  <div class="row row-cols-md-4" style="margin: 50px auto 20px auto;">
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/sweets.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title"><a href ="Sweets.php" target="_blank">Sweets</a></h3>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/cakes.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title"><a href ="BakedItems.php" target="_blank">Cakes</a></h3>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/chocolates.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title"><a href ="Chocolates&Candies.php" target="_blank">Chocolates</a></h3>
        </div>
      </div>
    </div>
    <div class="col col-md-3 col-sm-6 col-xs-12">
      <div class="card">
        <img src="Images/cookies.jpg" class="card-img-top" alt="Image Not Found">
        <div class="card-body">
          <h3 class="card-title"><a href ="BakedItems.php" target="_blank">Cookies</a></h3> 
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
<!--categories end-->
<br><br>
<!--locations start-->
<div class="container" id="locations">
  <h1>Cities We Deliver to</h1>
  <div class="container">
    <div class = "row row-cols-md-4">
      <div class="col col-md-3 col-sm-3 col-xs-6">
        <ul>
          <li>Delhi NCR</li>
          <li>Hyderabad</li>
          <li>Ahmedabad</li>
          <li>Ooty</li>
          <li>Kanpur</li>
          <li>Vishakhapatnam</li>
          <li>Nagpur</li>
          <li>Surat</li>
          <li>Trivandrum</li>
          <li>Madurai</li>
          <li>Vijayawada</li>
          <li>Rishikesh</li>
          <li>Raipur</li>
        </ul>
      </div>
      <div class="col col-md-3 col-sm-3 col-xs-6">
      <ul>
          <li>Kolkata</li>
          <li>Chennai</li>
          <li>Chandigarh</li>
          <li>Shimla</li>
          <li>Allahabad</li>
          <li>Bhubaneshwar</li>
          <li>Agra</li>
          <li>Varanasi</li>
          <li>Haridwar</li>
          <li>Kozhikode</li>
          <li>Jodhpur</li>
          <li>Jalandhar</li>
          <li>Gorakhpur</li>
        </ul>
      </div>
      <div class="col col-md-3 col-sm-3 col-xs-6">
      <ul>
          <li>Mumbai</li>
          <li>Lucknow</li>
          <li>Pune</li>
          <li>Ludhiana</li>
          <li>Aurangabad</li>
          <li>Coimbatore</li>
          <li>Dehradun</li>
          <li>Patna</li>
          <li>Leh</li>
          <li>Alappuzha</li>
          <li>Kota</li>
          <li>Jammu</li>
          <li>Gwalior</li>
        </ul>
      </div>
      <div class="col col-md-3 col-sm-3 col-xs-6">
      <ul>
          <li>Bengaluru</li>
          <li>Kochi</li>
          <li>Indore</li>
          <li>Guwahati</li>
          <li>Bhopal</li>
          <li>Mangalore</li>
          <li>Mysore</li>
          <li>Udaipur</li>
          <li>Pushkar</li>
          <li>Thrissur</li>
          <li>Ajmer</li>
          <li>Jaipur</li>
          <li><a href="#">SEE MORE >></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--locations end-->
<br>
<br>
<?php
    include ('footer.php');
?>
