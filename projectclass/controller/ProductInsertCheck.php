<?php
session_start();

$id = $_POST['id'];
$product_name = $_POST['product_name'];
$password = $_POST['model_number'];
$password = $_POST['model_year'];

if (isset($_REQUEST['submit'])) {
  if ($product_name == null || $id == null||  $model_number == null|| $model_year == null) {
      echo "null username/password";
  } else {
    $_SESSION['product_name'] = $_REQUEST['product_name'];

    $data = $_REQUEST['id'] . "|" . $_REQUEST['product_name'] . "|" . $_REQUEST['product_type'] . "|" . $_REQUEST['model_number'] . "|" . $_REQUEST['model_year'] . PHP_EOL;
    $fp = fopen('Productdata.txt', 'a');
    fwrite($fp, $data);
    header("Location:viewProduct.php");
}}
