<?php
require("../Controllers/product_controller.php");
require('../Settings/core.php');
//check_login();
// add brand
if(isset($_POST['addBrandButton'])){

    //get brand name from form
    $brandname = $_POST['add_brand'];
    

    $result = add_brand_controller($brandname);
    // var_dump($result); 

    header("Location: ../Admin/brand.php");

}




?>