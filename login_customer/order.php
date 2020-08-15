<?php
include('session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="This is Zera Shih's finial project site. She is a computer science student who is studying in CCT.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Make a Order🍴</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Baloo+Chettan+2:wght@600;700;800&family=La+Belle+Aurore&family=Liu+Jian+Mao+Cao&family=Merriweather+Sans&family=Monoton&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">STARBUCKS PROJECT</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="home_customer.php"><span>Customer</span></a>
            <a href="../logout.php"><span>Log Out</span></a>
          </li>
        </ul>
    </nav>

      <!--Navbar-->
      <div id="menu" class="menu">
        <div id="menu-bar" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar"></div>
            <div id="bar3" class="bar"></div>
            <ul id="nav" class="nav">
                <li><a href="home_customer.php">Home</a></li>
                <li><a href="order.php">Order</a></li>
                <li><a href="add_items.php">Cart</a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!--End of Navbar-->


        <label for="service_type">Service Type</label>
        <select class="form-control" name="service_type" id="service_type" required>
          <option></option>
          <option value="Seat In">Seat In</option>
          <option value="Take away">Take away</option>
          <option value="Collect Next Day">Collect Next Day</option>
          <option value="Charity Event">Charity Event</option>
        </select>
        <br>

        <div class="form-group">
          <label for="comment">Comment:</label>
          <textarea class="form-control" name="comment" rows="3" placeholder="Message for your barista." id="comment" required></textarea>
        </div>


        


    <script src="onClickMenu.js"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    


</body>

</html>