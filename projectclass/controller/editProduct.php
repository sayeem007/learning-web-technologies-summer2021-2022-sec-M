<html>
<body>
    <br>

    <?php

    ?>
    <form name="form2" action="ProductUpdate.php" method="POST">
        <fieldset>
            <legend>Update Product Details</legend>
            <table>
                <?php

                $display = file("Productdata.txt");
                for ($i = 0; $i <= count($display) - 1; $i++) {

                    $lines = explode("|", $display[$i]);

                    print('   Product Id: <input type="txt" name="id" value="' . $lines[0] . '">
                 |  Product name: <input type="text" name="product_name" value="' . $lines[1] . '">
                 |  Product Type: <input type="text" name="product_type" value="' . $lines[2] . '">
                 | Model No: <input type="text" name="model_number" value="' . $lines[3] . '">
                 | Model Year: <input type="text" name="model_year" value="' . $lines[4] . '">


                 | <input type="submit" name="update" value="UPDATE"><br>

                 ');

                }



                ?>
            </table>
        </fieldset>
    </form>

</body>

</html>
