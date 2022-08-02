<?php
session_start();

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$supplier_name = $_POST['supplier_name'];
$supplier_phone = $_POST['supplier_phone'];
$dob = $_POST['dob'];
    require_once '../model/productModel.php';

$email_regex = "/([a-zA-Z0-9!#$%&’?^_`~-])+@([a-zA-Z0-9-])+(.com)+/";

if (!preg_match($email_regex, $email)) {
    echo "wrong mail";
    echo "<br>";
    
if ($username == null) {
    echo "User name is null ";
    echo "<br>";
}
if ($password == null) {
    echo "password  is null ";
    echo "<br>";
}
if ($id == null) {
    echo "id  is null ";
    echo "<br>";
}

if ($supplier_name == null) {
    echo "supplier name  is null ";
    echo "<br>";
}

if ($supplier_phone == null) {
    echo "supplier phone  is null ";
    echo "<br>";
}
if ($dob == null) {
    echo "dob  is null ";
    echo "<br>";
}} else {
    //  $user['id']=id;
    //  $user['username']=username;
    //  $user['supplier_name']=supplier_name;
    //  $user['supplier_phone']=supplier_phone;
    //  $user['email']=email;
    //  $user['dob']=dob;

    $user = ['id'=> $id, 'username'=> $username, 'supplier_name'=>$supplier_name, 'supplier_phone'=>$supplier_phone,'email'=> $email,'dob'=> $dob];
    $status = signup($user);
    // $supplier = $id . "|" . $username . "|" . $password . "|" . $supplier_name .  "|" . $dob . "|" . $supplier_phone .  "|" . $email . PHP_EOL;
    // $fp = fopen('supplierData.txt', 'a');
    // fwrite($fp, $supplier);
    echo 'Inserted!';
}
