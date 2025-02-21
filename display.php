<?php include("connection.php");?>
<?php
    error_reporting(0);
     
    $query = "SELECT * FROM regdata WHERE des = 'Artisian'";
    $data = mysqli_query($conn, $query);

    $total = mysqli_num_rows($data);
?>