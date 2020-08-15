<?php
include('session_admin.php'); //include session admin file
?>

<?php

if (isset($_POST['reg_user'])) { //check that reg_user is not NULL, just a way of checking the button is there
    $Firstame = $_POST['firstname']; // populate with value from the name field of the form
    $Lastname = $_POST['lastname']; // populate with the value of the surname field of the form
    $Password = $_POST ['password']; // populate with the value of the password field of the form
    $Email = $_POST['email']; // populate with the value of the email field of the form
    $Mob_phone = $_POST['mob_phone']; // populate with the value of the mobile phone field of the form
    $Job_title = $_POST['job_title']; // populate with the value of the job title field of the form


    $sql = "INSERT INTO staff (firstname, lastname, password, email, mob_phone, job_title) 
  			  VALUES('$Firstame', '$Lastname', '$Password', '$Email', '$Mob_phone', '$Job_title')"; // insert user entered values into staff
    $result = mysqli_query($conn, $sql); //kick off sql query above
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
    <title>Add New Partner 🙋</title>
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

    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post">  
                
                <h2 class="text-center"><strong>Welcome</strong> new partner.</h2>
                <div class="form-group"><input class="form-control" type="text" name="firstname" placeholder="Firstname" required></div>
                <div class="form-group"><input class="form-control" type="text" name="lastname" placeholder="Lastname" required></div>
                <div class="form-group"><input class="form-control" type="password" name="pwd" placeholder="Password" required></div>
                <div class="form-group"><input class="form-control" type="text" name="email" placeholder="E-mail" required></div>
                <div class="form-group"><input class="form-control" type="tel" name="phone" placeholder="Mobile Number"></div>
                <div class="form-group"><input class="form-control" type="text" name="title" placeholder="Job Title"></div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="reg_user">Add New Partner</button></div>
                
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" placeholder="Enter ID" id="delete" required>Delete Staff by ID</label></div>
                </div>

                <div class="form-group"><button name="delete_button"  class="btn btn-primary btn-block btn-danger" type="submit" name="reg_user">Delete partner</button></div>

            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

             <!-------------------------------------------------------------------------------------------------

             *    Title: GerGarage source code
             *    Author: johnescamargo
             *    Date: 2020
             *    Code version: 2.0
             *    Availability: https://github.com/johnescamargo/GerGarage

            ------------------------------------------------------------------------------------------------------>

            <!-- I've made this part of php code with the help of GerGarage source code -->

            <?php
            //Our select statement. This will retrieve the data that we want. Retrieve everything from Staff table where id is greater than 1


            $sql = "SELECT * FROM staff
                    HAVING staff_id > 1;";


            if ($result = mysqli_query($conn, $sql)) { // if a result is returned
                if (mysqli_num_rows($result) > 0) { // if the number of results is greater than zero 
                    echo "  <label for='mobile-phone'>Staff:</label>
                    <table class='table table-hover'>
                            <thead>
                            <tr>
                            <th>Empolyee ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Job Title</th>
                            </tr>
                            </thead>
                            <tbody>"; // paint new table into the mechanics section (this currently isn't working)
                    while ($row = $result->fetch_assoc()) { // loop through the results
                        echo "<tr><td>" .
                            $row["staff_id"] . "</td><td>" .
                            $row["firstname"] . "</td><td>" .
                            $row["lastname"] . "</td><td>" .
                            $row["password"] . "</td><td>" .
                            $row["email"] . "</td><td>" .
                            $row["mob_phone"] . "</td><td>" .
                            $row["job_title"] . "</td><td>" .
                            "</td></tr>"; // paint a table row for each result into the table created above
                    }
                    echo "</tbody>
                                </table> </br> </br></br>"; // close off table when the last result is processed
                } else {
                    echo "0 Result"; // no results
                }
            }
            ?>
        

    <?php
    //Delete Staff by ID


    if (isset($_POST['delete_button'])) {
        $id = $_POST['delete'];
        $sql = "DELETE FROM staff where staff_id = $id;";

        if ($id == 1) {
        } else {
            $result = mysqli_query($conn, $sql);
        }
    }
    ?>


</body>

</html>