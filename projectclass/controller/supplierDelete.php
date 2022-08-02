<?php
if (isset($_REQUEST['delete'])) {

    $id = $_REQUEST['id'];



    // $fc = file("supplierData.txt");


    // $f = fopen("supplierData.txt", "w");


    // foreach ($fc as $line) {
        // if (!strstr($line, $id))
            fputs($f, $line); 
    // }
    // fclose($f);
    // header("Location:viewSupplier.php");
}
