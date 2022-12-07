<?php

require('../Settings/core.php');
require('../Controllers/product_controller.php');
// check_login();
// if (check_permission() != 1) {

//   echo 'you are not an admin';

//   //redirect to index.php
//   header('Location: ../Login/login.php');

// }
//include('../View/admin-nav-bar.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
  <title>Login</title>
</head>
<body>

<br>

  <h1>Add Brand Form</h1>

  <div class="container">

    <form method="post" action="../Actions/Add_brand.php">
      
      <div class="form-group">
        <input class="form-control" type="text" placeholder="Add Brand" name="add_brand" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" >
      </div>

      <input class ="btn btn-primary" type="submit" name="addBrandButton">

    </form>

<script src="../JS/customer_validation.js"></script>
<br>
<br>



<table class="table">
        <thead>
            <tr>
                <th>Brand ID</th>
                <th>Brand</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
			<?php
      $products = select_all_brands_controller();
			foreach($products as $x){
				echo 
				"
				<tr>
					<td>{$x['brand_id']}</td>
					<td>{$x['brand_name']}</td>
					<td><a href='../Admin/Update_brand_form.php?id={$x['brand_id']}'>Update</a></td>
			
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
	
 
    <a href = "../View/adminmenu.php" class = "btn btn-primary "type="submit" > Back </button>
</body>
</html>



