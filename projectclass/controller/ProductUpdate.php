<?php
session_start();
if (isset($_REQUEST['update'])) {


    $lookfor = $_SESSION['product_name'];

    $newtext = $_REQUEST['product_name'];


    $str = file_get_contents('Productdata.txt');

    $str = str_replace($lookfor, $newtext, $str);

    file_put_contents('Productdata.txt', $str);
    header("Location:viewProduct.php");
}
