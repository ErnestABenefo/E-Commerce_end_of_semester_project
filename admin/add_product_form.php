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
    <link rel="stylesheet" href="../css/mystyle.css">
</head>
<body>

<br>

  <h1>Add Product Form</h1>

  <div class="container">

    <form method="post"  enctype="multipart/form-data" action="../Actions/Add_product.php ">
        <div class="form-group">
            <select class="form-control" name = "product_cat" aria-label="Default select example" required="required">
                <option value= "">--Select Product Category--</option>
                <?php 
                    $products = select_all_categories_controller();
                    foreach($products as $x){

                ?>
                <option value="<?php echo $x['cat_id']; ?>"> <?php echo $x['cat_name'];?></option>
            

                <?php } ?>
           </select>
       </div>

       <div class="form-group">
            <select class="form-control" name = "product_brand" aria-label="Default select example" required="required"> 
                <option value="">--Select Product Brand--</option>
                <?php 
                    $products = select_all_brands_controller();
                    foreach($products as $x){

                ?>  
                <option value="<?php echo $x['brand_id']; ?>">
                <?php echo $x['brand_name'];?>
                </option>

                <?php } ?>
           </select>
       </div>

       <div class="form-group">
           <input class="form-control" type="text" placeholder="Product title" name="product_title" aria-required="true"  required="required" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product price" name="product_price" aria-required="true" required="required" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product description" name="product_desc" aria-required="true" required="required" > 
        </div>

        <div class="form-group">
           <input class="form-control" type="file" placeholder="Product image" name="product_image" aria-required="true"  required="required" >
        </div>

        <div class="form-group">
           <input class="form-control" type="text" placeholder="Product keywords" name="product_keywords" aria-required="true" required="required" >
        </div>

      <input class ="btn btn-primary" type="submit" name="addProductButton">

    </form>


    <br>
<br>



<table class="table">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Category</th>
                <th>Product Brand</th>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Product Desc</th>
                <th>Product Image</th>
                <th>Product Keywords</th>
                <th> Action </th>
            </tr>
        </thead>

        <tbody>
			<?php
      $products = select_all_products_controller();
			foreach($products as $x){
				echo 
				"
				<tr>
					<td>{$x['product_id']}</td>
					<td>{$x['cat_name']}</td>
                    <td>{$x['brand_name']}</td>
                    <td>{$x['product_title']}</td>
                    <td>{$x['product_price']}</td>
                    <td>{$x['product_desc']}</td>
                    <td><img src='../images/products/{$x["product_image"]}' alt='...' width='200' height='200'></td>
                    <td>{$x['product_keywords']}</td>
                    <td><a href='../Admin/Update_product_form.php?id={$x['product_id']}'>Update</a></td>
                    <td><a href='../Admin/Update_product_form.php?id={$x['product_id']}'>Delete</a></td>

				
			
				</tr>
				";
			}

			?>

		
        </tbody>
    </table>
	
 


<script src="../JS/customer_validation.js"></script>



</body>
</html>