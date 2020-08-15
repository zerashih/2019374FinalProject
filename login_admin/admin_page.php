

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
    content="This is Zera Shih's finial project site. She is a computer science student who is studying in CCT.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome! Admin 🙋</title>
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
            <a href="admin_page.php"><span>Admin</span></a>
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
                <br>
                <li><a href="order_admin.php">Display Orders</a></li>
                <br>
                <li><a href="manage_order.php">Order Actions</a></li>
                <br>
                <li><a href="invoice.php">Customer Invoice</a></li>
                <br>
                <li><a href="add_staff.php">Add Our New Partners</a></li>

                <!-------------------------------------------------------------->

                <li><a href="index.php">Food Menu</a></li>
                <li><a href="all-orders.php">All Orders</a></li> 
                 <!-------------------------------------------------------------------------------------------------

                         * Title: PN-FoodOrdering source code
                         * Author: Projectnotes
                         * Date: 2019
                         * Code version: 2.0
                         * Availability: https://projectnotes.org/it-projects/food-ordering-system-in-php-with-source-code/

                  ---------------------------------------------------------------------------------------------------->

                  <!-- This part of php code is not finished yet, and I've wrote them with the help of the PN-FoodOrdering source code -->
                  <!-- I am planning to come back to work on it -->
                <?php
                  include 'db_connection.php';

                  $query = "SELECT * FROM `order`";

                  if ($result = mysqli_query($conn, $query)) {
                    if (mysqli_num_rows($result) > 0) {

                      echo "<ul>";

      									while($row1 = mysqli_fetch_array($result)){
                            echo '<script>alert('.$row1['status'].')</script>';
                            echo '<li><a href="all-orders.php?status='.$row1['status'].'">'.$row1['status'].'</a>
                            </li>';
      									}
                      echo "</ul>";
                      }
                    }
                    else {
                      echo '<script>alert("Invalided inputs, please try again!")</script>';
                    }

                ?>
                
<!--                 <li><a href="all-tickets.php">All Tickets</a>
                <?php
									$sql2 = mysqli_query($conn, "SELECT DISTINCT status FROM tickets;");
									while($row2 = mysqli_fetch_array($sql2)){
                                    echo '<li><a href="all-tickets.php?status='.$row2['status'].'">'.$row2['status'].'</a>
                                    </li>';
									}
                ?> -->
                 <li><a href="users.php">Users</a></li>

            </ul>
        </div>
    </div>
    <!--End of Navbar-->             

    <!-- START CONTENT -->
      <section id="content">

        <!--breadcrumbs start-->
        <div id="breadcrumbs-wrapper">
          <div class="container">
            <div class="row">
              <div class="col s12 m12 l12">
                <h5 class="breadcrumbs-title">Menu</h5>
              </div>
            </div>
          </div>
        </div>
        <!--breadcrumbs end-->


        <!--start container-->
        <div class="container">
          <p class="caption">Add, Edit or Remove Menu Items.</p>
          <div class="divider"></div>
		  <form class="formValidate" id="formValidate" method="post" action="routers/menu-router.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Order Your Drink!</h4>
              </div>
              <div>
				<table id="data-table-admin" class="responsive-table display" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Item Price/Piece</th>
                        <th>Available</th>
                      </tr>
                    </thead>

                    <tbody>
				<?php
				$result = mysqli_query($conn, "SELECT * FROM items");
				while($row = mysqli_fetch_array($result))
				{
					echo '<tr><td><div class="input-field col s12"><label for="'.$row["id"].'_name">Name</label>';
					echo '<input value="'.$row["name"].'" id="'.$row["id"].'_name" name="'.$row['id'].'_name" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';					
					echo '<td><div class="input-field col s12 "><label for="'.$row["id"].'_price">Price</label>';
					echo '<input value="'.$row["price"].'" id="'.$row["id"].'_price" name="'.$row['id'].'_price" type="text" data-error=".errorTxt'.$row["id"].'"><div class="errorTxt'.$row["id"].'"></div></td>';                   
					echo '<td>';
					if($row['deleted'] == 0){
						$text1 = 'selected';
						$text2 = '';
					}
					else{
						$text1 = '';
						$text2 = 'selected';						
					}
					echo '<select name="'.$row['id'].'_hide">
                      <option value="1"'.$text1.'>Available</option>
                      <option value="2"'.$text2.'>Not Available</option>
                    </select></td></tr>';
				}
				?>
                    </tbody>
</table>
              </div>
			  <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Modify
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>
		  <form class="formValidate" id="formValidate1" method="post" action="routers/add-item.php" novalidate="novalidate">
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Add Item</h4>
              </div>
              <div>
<table>
                    <thead>
                      <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Price/Piece</th>
                      </tr>
                    </thead>

                    <tbody>
				<?php
					echo '<tr><td><div class="input-field col s12"><label for="name">Name</label>';
					echo '<input id="name" name="name" type="text" data-error=".errorTxt01"><div class="errorTxt01"></div></td>';					
					echo '<td><div class="input-field col s12 "><label for="price" class="">Price</label>';
					echo '<input id="price" name="price" type="text" data-error=".errorTxt02"><div class="errorTxt02"></div></td>';                   
					echo '<td></tr>';
				?>
                    </tbody>
</table>
              </div>
			  <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Add
                                <i class="mdi-content-send right"></i>
                              </button>
                            </div>
            </div>
			</form>			
            <div class="divider"></div>
            
          </div>
        </div>
        </div>
        <!--end container-->

      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->




  <!-- //////////////////////////////////////////////////////////////////////////// -->

<!--Footer-->
<footer class="footer">
        <div class="section-center">
            <p class="text">
                &copy;<span>2020 Zera Shih Mock-up Starbucks Website Project. All rights reserved.</span>
            </p>
        </div>
    </footer>
    <!--End of footer-->




    <!-- ================================================
    Scripts
    ================================================ -->
    
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="js/plugins/jquery-1.11.2.min.js"></script>    
    <!--angularjs-->
    <script type="text/javascript" src="js/plugins/angular.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- data-tables -->
    <script type="text/javascript" src="js/plugins/data-tables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/plugins/data-tables/data-tables-script.js"></script>
    
    <script type="text/javascript" src="js/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/plugins/jquery-validation/additional-methods.min.js"></script>
    
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.min.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
	    <script type="text/javascript">
    $("#formValidate").validate({
        rules: {
			<?php
			$result = mysqli_query($con, "SELECT * FROM items");
			while($row = mysqli_fetch_array($result))
			{
				echo $row["id"].'_name:{
				required: true,
				minlength: 5,
				maxlength: 20 
				},';
				echo $row["id"].'_price:{
				required: true,	
				min: 0
				},';				
			}
		echo '},';
		?>
        messages: {
			<?php
			$result = mysqli_query($con, "SELECT * FROM items");
			while($row = mysqli_fetch_array($result))
			{  
				echo $row["id"].'_name:{
				required: "Ener item name",
				minlength: "Minimum length is 5 characters",
				maxlength: "Maximum length is 20 characters"
				},';
				echo $row["id"].'_price:{
				required: "Ener price of item",
				min: "Minimum item price is Rs. 0"
				},';				
			}
		echo '},';
		?>
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
    <script type="text/javascript">
    $("#formValidate1").validate({
        rules: {
		name: {
				required: true,
				minlength: 5
			},
		price: {
				required: true,
				min: 0
			},
	},
        messages: {
		name: {
				required: "Enter item name",
				minlength: "Minimum length is 5 characters"
			},
		 price: {
				required: "Enter item price",
				minlength: "Minimum item price is Rs.0"
			},
	},
		errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    </script>
</body>

</html>