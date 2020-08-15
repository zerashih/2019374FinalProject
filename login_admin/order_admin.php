<?php
include('session_admin.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="This is Zera Shih's finial project site. She is a computer science student who is studying in CCT.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Display Orders 📃</title>
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Baloo+Chettan+2:wght@600;700;800&family=La+Belle+Aurore&family=Liu+Jian+Mao+Cao&family=Merriweather+Sans&family=Monoton&family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="myStyle.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">STARBUCKS PROJECT</a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="home_admin.php"><span>Admin</span></a>
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
                <li><a href="home_admin.php">Home</a></li>
                <li><a href="order_admin.php">Display Orders</a></li>
                <li><a href="manage_order.php">Order Actions</a></li>
                <li><a href="invoice.php">Customer Invoice</a></li>
                <li><a href="add_staff.php">Add Our New Partners</a></li>
            </ul>
        </div>
    </div>
    <!--End of Navbar-->

</body>

</html>