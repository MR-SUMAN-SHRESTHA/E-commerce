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
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

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


      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="food.php"> Item List</a>
            </li>
          </ul>

        </div>
    </nav>
  </div>
  <?php
  $id = $_GET['id'];
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr>
        <div class="row">
          <?php
          // Get item data from database 
          $result = $connection->query("SELECT * FROM item WHERE id =".$id );
          if ($result) {
            while ($row = $result->fetch_assoc()) {
          ?>


              <div class="container">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Enter Your Name:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Name</label>
                    <input type="text" value="<?php echo $row['item_name']; ?>" class="form-control" id="exampleInputPassword1" name="item_name" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Item Price</label>
                    <input type="text" value="<?php echo $row['item_price']; ?>" class="form-control" name="item_price" id="exampleInputPassword1" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Please enter transaction code of esewa payment</label>
                    <input type="text" class="form-control" name="t_code" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter transaction code" required>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
              </form>
        </div>
    <?php
            }
          }
    ?>

      </div>
      </form>
      </center>
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
          Gaurav Basnet<br>
          Iksahang Limbu<br>
          Bibash Chamlagai
        </b>
      </center>
    </div>
  </footer>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $item_name = $_POST['item_name'];
  $item_price = $_POST['item_price'];
  $phone_number = $_POST['phone_number'];
  $t_code = $_POST['t_code'];
  $insert = "INSERT INTO orders (order_cname, order_item, order_price, order_ph_no, status,t_code) VALUES ('$name','$item_name','$item_price','$phone_number', 'paid','$t_code')";
  // echo $insert;
  if (mysqli_query($connection, $insert)) {
?>
    <script>
      alert("Order Placed Succesfully");
      window.location.href = 'http://localhost/ecommerce/food.php';
    </script>
<?php }
}
?>