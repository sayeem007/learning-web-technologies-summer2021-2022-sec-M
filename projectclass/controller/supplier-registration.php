<?php
session_start();
if (isset($_COOKIE['status'])) {
    
// $username = $_POST['username'];
// $password = $_POST['password'];
// $email = $_POST['email'];
// $supplier_name = $_POST['supplier_name'];
// $supplier_phone = $_POST['supplier_phone'];
// $dob = $_POST['dob'];
// $id = $_POST['id'];
//     $user = ['id'=> $id, 'username'=> $username, 'supplier_name'=>$supplier_name, 'supplier_phone'=>$supplier_phone,'email'=> $email,'dob'=> $dob];
//     require_once '../model/productModel.php';
//     $user = signup($user);
?>
    <html>

    <head>
        <title>Supplier Create</title>
    </head>

    <body>
        <form method="post" action="SupplierRegCheck.php">
            <fieldset>
                <legend>Supplier Create</legend>
                <table>
                    <tr>
                        <td>id</td>
                        <td><input type="text" name="id" value=""></td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="username" value=""></td>
                    </tr>
                    <tr>
                        <td>Supplier name</td>
                        <td><input type="text" name="supplier_name" value=""></td>
                    </tr>


                    <tr>
                        <td>Supplier Phone</td>
                        <td><input type="text" name="supplier_phone" value=""></td>
                    </tr>
                    <tr>
                        <td>Supplier Email</td>
                        <td><input type="text" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Date Of Birth Year</td>
                        <td><input type="date" name="dob" value=""></td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value=""></td>
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
