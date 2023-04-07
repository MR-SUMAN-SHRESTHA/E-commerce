<?php
include('additem.php');
?>
      <!DOCTYPE html>
      <html>
      <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>F-pannel</title>
        <style>
          *
          {
            margin: 0;
            padding:0 ;
          }
          .container
          {
            position: relative;

          }
          .one
          {
            border: 0px solid black;
            width:25%;
            height: 100vh;
            background: black;
            display: flex;
            justify-content: center;
            align-items: center;
          }
          .one ul 
          {
            list-style: none;
          }
          .one ul li
          {
            text-align: center;
            border: 0px solid black;
            height: 50px;
            margin: 20px;
            width: 200px;
            border-radius: 30px;
          }
          .one ul li a
          {
            text-decoration: none;
            font-size: 20px;
            color: white;
            border: 0px solid black;
            width: 200px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius:30px ;
            transition: background 1s;
            transition: transform;

          }
          .one ul li a:hover
          {

            background:blue;
            transform: scale(1.3);
          }
          .two
          {
            border: 0px solid black;
            background: white;
            width: 75%;
            height: 100vh;
            float: left;
            position: absolute;
            left: 25%;
            top:1px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #c8cdca;

          }
          table
          {
            width: 900px;
            height: 400px;
          }
          .form{
            padding: 20px;
            background: #0B9283;
            border-radius: 20px;
              box-shadow:2px 2px 20px black ;
          }

        </style>
      </head>
      <body>
      <div class="container">
          <div class="one">
            <ul>
              <li><a href="cpanel.php">Dash Board</a></li>
              <li><a href="additems.php">Add Items</a></li>
              <li><a href="orderlist.php">Order List</a></li>
            </ul>
          </div>
          <div class="two">
          <br>
      <div class="form">
       
        <form method="post" action="" enctype="multipart/form-data">
        <b style="margin-left: 20px; font-size: 20px;">Item Name:</b>
        <input type="text" name="item_name" placeholder="Enter Item Name Here"size="40"style="margin-left: 20px; font-weight:bold;border: 2px solid #0B9283;"><br><br>
        

        <b style="margin-left: 20px; font-size:
        20px">Item Price:</b>
        <input type="Number" name="item_price" placeholder="Price Here"size="40"style="margin-left: 40px;font-weight:bold;border: 2px solid #0B9283;"><br><br>
        
         <b style="margin-left: 20px; font-size:
        20px">Item Price:</b>
        <input type="file" name="image" placeholder="Price Here"size="40"style="margin-left: 40px;font-weight:bold;border: 2px solid #0B9283;"><br><br>
        <center>
          <button type="submit" name="submit" style="font-weight: bold; width: 200px;border-radius: 20px; height: 30px;font-weight:bold;border: 2px solid #0B9283;" class="submit">Add items</button></center>
      </form>
      </div>

          </div>
      </div>
      </body>
      </html>