<?php

require('../Settings/core.php');
require('../Controllers/product_controller.php');
// check_login();
// if (check_permission() != 1) {

//   echo 'you are not an admin';

//   //redirect to index.php
//   header('Location: ../Login/login.php');

// }

$product = select_one_category_controller($_GET['id']); 

 

?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <title>Login</title>
</head>
<body>

  <h1>Update Category Form</h1>

  <div class="container">

    <form method="post" action="../Actions/Update_category.php">

      <div class="form-group">
        <input class="form-control" type=" "  name="category_id" value="<?php echo $_GET['id'] ?>">
      </div>
      
      <div class="form-group">
        <input class="form-control" type="text" placeholder="Update Category" name="categoryname" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" value="<?php echo $product['cat_name'] ?>" >
      </div>

      <input class ="btn btn-primary" type="submit" name="updateCategoryButton">

    </form>`

<script src="../JS/customer_validation.js"></script>