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
  <title>Category</title>
</head>
<body>

<br>


  <h1>Add Category Form</h1>
  <br>
  <div class="container">

    <form method="post" action="../Actions/Add_category.php">
      
      <div class="form-group">
        <input class="form-control" type="text" placeholder="Add Category" name="category_name" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" >
      </div>

      <input class ="btn btn-primary" type="submit" name="addCategoryButton">

    </form>

<script src="../JS/customer_validation.js"></script>
<br>
<br>



<table class="table">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
			<?php
      $products = select_all_categories_controller();;
			foreach($products as $x){
				echo 
				"
				<tr>
					<td>{$x['cat_id']}</td>
					<td>{$x['cat_name']}</td>
					<td><a href='../Admin/Update_category_form.php?id={$x['cat_id']}'>Update</a></td>
			
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
	
 
    <a href = "../View/adminmenu.php" class = "btn btn-primary "type="submit" > Back </button>
</body>
</html>



