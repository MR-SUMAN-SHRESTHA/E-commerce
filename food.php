  <?php
  include('connection.php');
  ?>
    <!DOCTYPE html>
    <html>

    <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="stylesheet" type="text/css" href="fruit.css">
      <title>SSBSS</title>

      <!-- slider stylesheet -->
      <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

      <!-- fonts style -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <link href="css/food.css" rel="stylesheet" />
    </head>
    <body>

          <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
              <a class="navbar-brand" href="index.html">
                <img src="images/logo2.png" alt="" /><span style="margin: 20px;font-size: 2vw;">
                      Shree Shanti Bhagwati Secondary School
                </span>
              </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html" >Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="food.php"> Item List</a>
                    </li>                    
                  </ul>
              
              </div>
            </nav>
          </div>


    <h1><center><br><b>TOP FOOD ITEMS</b></center></h1>
    <br><br>

  
<div class="container">
  <div class="row">
    <div class="col-md-12">        
        <hr>
        <div class="row">
                          <?php 
              // Get item data from database 
              $result = $connection->query("SELECT * FROM item order by id DESC"); 

                if($result->num_rows > 0)
                { 
                  while($row = $result->fetch_assoc())
              {
                ?>
  <div class="col-md-4 mb-2">    
  <div class="card shadow">
    <div class="card-body">        
      <img src="./upload/<?php echo $row['item_image']; ?>" width=100% height=50%>
      <h3><?php echo $row['item_name'];?></h3>
      <h3>Rs: <?php echo $row['item_price'];?></h3>
      <a href="order.php?id=<?php echo $row['ID']; ?>">
              <button type="button" class="btn btn-primary">Order Now </button></a>

    </div>
  </div>
  </div>
  <?php 
  }
}
else
{
echo "No data availaible";
}
?>
        </div>
    </div>
  </div>    
    <footer>
      <BR>
      <br>
      <div class="foot">
          <center>
            <b>Created By: <br>
            Suman Shrestha<br>
            Bibash Chamlagai<br>
            Gaurav Basnet<br>
            Iksahang Limbu<br>
        
    </b>
            </center>
    </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

    </html>