<?php
session_start();
if (isset($_COOKIE['status'])) {
?>

    <html>

    <head>
        <title>Product Index</title>
    </head>

    <body>
      <h1 align="Center">Product Index</h1>
      <hr>
        <br>

        <?php

        ?>
        <ul>
            <li>
                <a href="../view/dashboard.php">Home</a>
            </li>
            <li>
                <a href="../view/product-insert.php">Product Insert</a>
            </li>
            <li>
                <a href="editProduct.php">Edit Product</a>
            </li>
            <li>
                <a href="viewSupplier.php">Supplier Index</a>
            </li>

            <li>
                <a href="logout.php">Logout</a>
            </li>


        </ul>
        <form name="form2" action="ProductDelete.php" method="POST">
            <fieldset>
                <legend> Product Details</legend>
                <table>
                    <?php

                    $display = file("Productdata.txt");
                    for ($i = 0; $i <= count($display) - 1; $i++) {

                        $lines = explode("|", $display[$i]);
                        echo $lines[0];
                        echo ('   Product Id: <input type="txt" name="id" value="' . $lines[0] . '">
                 |  Product name: <input type="text" name="product_name" value="' . $lines[1] . '">
                 | Type: <input type="text" name="product_type" value="' . $lines[2] . '">
                 | Model No: <input type="text" name="model_number" value="' . $lines[3] . '">
                 | Model Year: <input type="text" name="model_year" value="' . $lines[4] . '">


                 | <input type="submit" name="delete" value="DELETE"><br>');
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
