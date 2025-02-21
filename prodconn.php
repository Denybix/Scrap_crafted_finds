<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = $_POST["productId"];
    $productName = $_POST["productName"];
    $productRating = $_POST["productRating"];
    $productDescription = $_POST["productDescription"];
    $productcategory = $_POST["productcategory"];
    $productPrice = $_POST["productPrice"];

    $sql = "INSERT INTO products (productId, productName, productRating, productDescription, productcategory, productPrice)
            VALUES ('$productId','$productName', '$productRating', '$productDescription', '$productcategory', '$productPrice')";

    if (mysqli_query($conn, $sql)) {
        echo "Product added to the database successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
