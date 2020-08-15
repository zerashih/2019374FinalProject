<?php

//start session
session_start();
include 'login_admin/db_connection.php';

//Check to see if the form (login section) has been submitted
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $username = $_POST['username'];
  $pass = $_POST['password'];

  // create SQL statement
  $sql = "SELECT username FROM admin WHERE username='$username' && password='$pass'";
  
  // Query database
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);

  // count the number of records found
  $count = mysqli_num_rows($result);

  
  if ($count == 1) {
    $_SESSION['login_admin'] = $row['email']; // set session variable login_admin to user email address
    $_SESSION['login_name'] = $row['username']; // set session variable login_name to user name
    
    header('Location: login_admin/admin_page.php'); // creates admin or user logged in page header as appropriate

  } else {
    echo '<script>alert("Invalided inputs, please try again!")</script>';
    // if login fails create an alert box
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="This is Zera Shih's finial project site. She is a computer science student who is studying in CCT.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Log In 🔓</title>
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
    </nav>
  

    <div class="login-dark">
        <form method="post">
            <h2 class="sr-only">Admin Login</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="text" name="username" placeholder="User"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

</html>