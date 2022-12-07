<?php

require('../Settings/core.php');
require('../Controllers/product_controller.php');

// check_login();
// if (check_permission() != 1) {

//   echo 'you are not an admin';

//   //redirect to index.php
//   header('Location: ../Login/login.php');
// }

//  include('../View/admin-nav-bar.php');

$product = select_one_product_controller($_GET['id']);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<br>

  <h1>Update Product Form</h1>

  <div class="container">

    <form method="post"  enctype="multipart/form-data" action="../Actions/Update_product.php ">

        <div class="form-group">
            <input class="form-control" type="hidden" name="product_id" value="<?php echo $_GET['id'] ?>">
	  </div>
        <div class="form-group">
            <select class="form-control" name = "product_cat" aria-label="Default select example" required="required">
                <option value= "<?php echo $product['product_cat'] ?>"><?php echo $product['cat_name'] ?></option>
                <?php 
                    $products = select_all_categories_controller();
                    foreach($products as $x){

                ?>
                <option value="<?php echo $x['cat_id']; ?>"><?php echo $x['cat_name'];?></option>

                <?php } ?>
           </select>
       </div>

       <div class="form-group">
            <select class="form-control" name = "product_brand" aria-label="Default select example" required="required"> 
                <option value="<?php echo $product['product_brand'] ?>"><?php echo $product['brand_name'] ?></option>
                <?php 
                    $products = select_all_brands_controller();
                    foreach($products as $x){

                ?>  
                <option value="<?php echo $x['brand_id']; ?>"><?php echo $x['brand_name'];?></option>

                <?php } ?>
           </select>
       </div>

       <div class="form-group">
           <input class="form-control" type="text" placeholder="Product title" name="product_title" aria-required="true"  required="required" value="<?php echo $product['product_title'] ?>" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product price" name="product_price" aria-required="true" pattern = "\d{0,8}(\.\d{1,4})?$" required="required" value="<?php echo $product['product_price'] ?>" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product description" name="product_desc" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" value="<?php echo $product['product_desc'] ?>" >
        </div>

        <div class="form-group">
            <img src="../images/products/<?php echo htmlentities($product['product_image']);?>" width="200" height="200">
            <input class="form-control" type="file" placeholder="Product image" name="product_image" aria-required="true" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product keywords" name="product_keywords" aria-required="true" pattern="^[-\sa-zA-Z]+$" required="required" value="<?php echo $product['product_keywords'] ?>" >
        </div>

      <input class ="btn btn-primary" type="submit" name="updateProductButton">

    </form>