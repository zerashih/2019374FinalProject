<?php

session_start(); // SG starts a new session or resumes the current one based on a session identified passed via a GET or POST request or passed via a cookie.
include 'db_connection.php'; //SG include this file

if ($_SERVER["REQUEST_METHOD"] == "POST") // SG check if the server request method is a POST method vs a GET method, this is sanitation for the code below

{
    
    $name = $_POST['username']; // SG populate the name variable with the user entered name value
    $email = $_POST['email']; // SG populate the email variable with the user entered email value 
    $phone = $_POST['phone']; // SG populate the phone variable with the user entered mobile value 
    $password = $_POST['pwd']; // SG populate the password variable with the user entered password value


    $sql = "INSERT INTO `customer` (name, email, mobile, password) 
  			  VALUES('$name', '$email', '$phone', '$password')"; //create sql variable with MYSQL statement and variables as values
    $result = mysqli_query($conn, $sql);
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
    <title>Customer Sign Up 🕺</title>
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

        <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="signup.php">  
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" name="username" placeholder="Username" required></div>
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="E-mail" required></div>
                <div class="form-group"><input class="form-control" type="text" name="phone" placeholder="Mobile Number" required></div>
                <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat Password"></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="signup-submit">Sign Up</button></div><a class="already" href="login.php">You already have an account? Login here.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>