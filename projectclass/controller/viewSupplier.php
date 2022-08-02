<?php
session_start();
if (isset($_COOKIE['status'])) {
?>


    <html>

    <head>
        <title>Product Index</title>
    </head>

    <body>
      <h1 align="Center">Supplier Index</h1>
      <hr>
        <br>

        <?php

        ?>
        <ul>
            <li>
                <a href="../view/dashboard.php">Home</a>
            </li>
            <li>
                <a href="supplier-registration.php">Supplier Insert</a>
            </li>
            <li>
                <a href="viewProduct.php">Product Index</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>

        </ul>
        <form name="form2" action="supplierDelete.php" method="POST">
            <fieldset>
                <legend> Supplier Details</legend>
                <table>
                    <?php

                    $display = file("supplierData.txt");
                    for ($i = 0; $i <= count($display) - 1; $i++) {

                        $lines = explode("|", $display[$i]);


                        // print_r($lines);
                        echo ('   Id: <input type="txt" name="id" value="' . $lines[0] . '">
                     |  username: <input type="text" name="username" value="' . $lines[1] . '">
                     | password: <input type="password" name="password" value="' . $lines[2] . '">
                     |supplier name: <input type="text" name="supplier_name" value="' . $lines[3] . '">
                     | dob: <input type="text" name="dob" value="' . $lines[4] . '">
                     | supplier_phone : <input type="text" name="supplier_phone" value="' . $lines[5] . '">
                     |email: <input type="text" name="email" value="' . $lines[6] . '">

                     | <input type="submit" name="delete" value="DELETE"><br>
                     ');
                    }



                    ?>
                </table>
            </fieldset>
        </form>

    </body>

    </html>


<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>
