<?php

session_start(); // SG starts a new session or resumes the current one based on a session identified passed via a GET or POST request or passed via a cookie.
include 'db_connection.php'; // SG include this file

if ($_SERVER["REQUEST_METHOD"] == "POST") // SG check if the server request method is a POST method vs a GET method, this is sanitation for the code below

{
  $email = $_POST['email']; // SG assign email variable a value of the email attribute of the POST request 
  $password = $_POST['password']; // SG assign password variable a value of the password attribute of the POST request 
  $sql = "SELECT * FROM customer WHERE email='$email' && password='$password'"; // SG MYSQL statement to retrieve all data from the customer table where email and password match the user inputted credentials
  $sqlName = "SELECT name FROM customer WHERE email='$email' && password='$password'"; // SG MYSQL statement to retrieve the customers name, I'm not sure why he has included this as he has already retrieved this in the above statement and isn't using this variable

  $result = mysqli_query($conn, $sql); // SG kick off above request and store the resulting data in result variable
  
  $row = mysqli_fetch_assoc($result); // SG fetch the resulting row as an associative array

  
  if ($row !== NULL) {
    $_SESSION['login_starbucks_project'] = $row['email']; // SG set session variable login_gergarage to user's email address
    $_SESSION['login_name'] = $row['name']; // SG set session variable login_name to user's name
    header('Location: login_customer/home_customer.php'); // SG header call which paints header with customer name on the customer home page
  } else {
    echo '<script>alert("Invalided inputs, please try again!")</script>'; // SG create an alert box if the credentials are incorrect
    exit();
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
    <title>Customer Log In 👤</title>
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
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

