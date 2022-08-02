<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
    <head>
        <title>Login Page</title>
        <script src="../asset/productinsert.js"></script>
    </head>

    <body>
      <h1 align="Center">Product Insert</h1>
      <hr>
        <ul>
            <li>
                <a href="Home.html">Home</a>
            </li>
            <li>
                <a href="../controller/viewProduct.php">Product Index</a>
            </li>
            <li>
                <a href="../controller/logout.php">Logout</a>
            </li>

        </ul>
        <form method="post" action="../controller/ProductInsertCheck.php" onsubmit="return notNullpro();">
            <fieldset>
                <legend>Create Product</legend>
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="id" id="id" value=""></td>
                    </tr>
                    <tr>
                        <td>product name</td>
                        <td><input type="text" name="product_name" id="product_name" value=""></td>
                    </tr>

                    <tr>
                        <td>Select Product Type</td>
                        <td>
                            <select name="product_type" >
                                <option value="micro">Micro</option>
                                <option value="suv">Suv</option>
                                <option value="sedan">Sedan</option>
                                <option value="bus">Bus</option>
                            </select>
                        </td>

                        <td>Model Number</td>
                        <td><input type="text" name="model_number" id="model_number" value=""></td>
                    </tr>
                    <tr>
                        <td>Model Year</td>
                        <td><input type="date" name="model_year" id= "model_year" value=""></td>
                    </tr>

                    <tr>

                        <td>

                            <input type="submit" name="submit" value="Submit">
                            <input type="reset" name="" value="Reset">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

    </body>

    </html>
    </body>

    </html>


<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>
