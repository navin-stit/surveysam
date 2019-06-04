<?php
session_start();
include '../database.php';
$error ="";
error_reporting(E_ALL);
ini_set('display_errors',1);
//print_r($_POST['idfrom']);
//die;
if(isset($_POST['productID']) && $_POST['productID'] != "")
{
  $fromIDs = explode('_', $_POST['productID']);  
  $update = mysqli_query($conn,"update products set images='' where id=".$fromIDs[1]);
  $response = array('status'=>TRUE);
  echo json_encode($response);
}

if(isset($_POST['image_id']) && $_POST['image_id'] != "")
{
  $fromIDs = explode('_', $_POST['image_id']);
  $update = mysqli_query($conn, "update products set img_popular ='' where id =" .$fromIDs[1]); 
  echo json_encode(array('status' => TRUE));
}


if(isset($_POST['idfrom'])  && isset($_POST['idTo']))
{
  $pro_nameFrom = trim($_POST['pronamefrom']);
  //$pro_nameFrom = mysqli_real_escape_string($pro_nameFrom);
  $pro_descFrom = trim($_POST['prodescfrom']);
  //$pro_descFrom = mysqli_real_escape_string($pro_descFrom);
  $pro_priceFrom = trim($_POST['proPricefrom']);
  $pro_reg_priceFrom = trim($_POST['proRegfrom']);
  $pro_shippingFrom = trim($_POST['proShipfrom']);
  $_POST['proImagefrom'] = str_replace('../',"",$_POST['proImagefrom']);
  $_POST['proImagePopularfrom'] = str_replace('../',"",$_POST['proImagePopularfrom']);
  
  $pro_nameTo = trim($_POST['pronameTo']);
  //$pro_nameTo = mysqli_real_escape_string($pro_nameTo);
  $pro_descTo = trim($_POST['prodescTo']);
  //$pro_descTo = mysqli_real_escape_string($pro_descTo);
  $pro_priceTo = trim($_POST['proPriceTo']);
  $pro_reg_priceTo = trim($_POST['proRegTo']);
  $pro_shippingTo = trim($_POST['proShipTo']);
  
  $_POST['proImageTo'] = str_replace('../',"",$_POST['proImageTo']);
  $_POST['proImagePopularTo'] = str_replace('../',"",$_POST['proImagePopularTo']);

  $fromIDs = explode('_', $_POST['idfrom']);
  
  $update = mysqli_query($conn,"update products set url_1 ='".$_POST['urlfrom']."', product_name = '".$pro_nameFrom."' , images = '".$_POST['proImagefrom']."',
  img_popular = '".$_POST['proImagePopularfrom']."' , description = '".$pro_descFrom."', product_price = '".$pro_priceFrom."',
   regular_price = '".$pro_reg_priceFrom."', shipping = '".$pro_shippingFrom."' where id=".$fromIDs[1]);

  $roIDs = explode('_', $_POST['idTo']);
  

  $update = mysqli_query($conn,"update products set url_1 ='".$_POST['urlTo']."', product_name = '".$pro_nameTo."', images = '".$_POST['proImageTo']."' ,
  img_popular = '".$_POST['proImagePopularTo']."' ,description = '".$pro_descTo."',product_price = '".$pro_priceTo."',
   regular_price = '".$pro_reg_priceTo."', shipping = '".$pro_shippingTo."' where id=".$roIDs[1]);
  $response = array('status'=>TRUE);
  echo json_encode($response);
}
