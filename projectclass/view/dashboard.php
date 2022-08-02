<?php
session_start();
if (isset($_COOKIE['status'])) {
?>
    <html>
    <body>
        <h1 align="Center">Welcome To Admin home page</h1>
        <hr>
<table width="1500">
<tr>
    <td align="Center"><a href="../controller/viewSupplier.php"><h3>Supplier Index</h3></a></td>
    <td align="Center"><a href="../controller/viewProduct.php"> <h3>Product Index</h3> </a> </td>
      <td align="Right"><a href="../controller/logout.php"> <h3>Logout</h3> </a> </td>
  </tr>

</table>
    </body>
    </html>
<?php
} else {
    echo "invalid request";
    echo "<br>";
    echo "please login first";
}
?>
