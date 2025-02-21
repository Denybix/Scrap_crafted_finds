<?php
include("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['telphone'])) {
    // Retrieve POST data
    $productId = $_POST['productId'];
    $productName = $_POST['productName'];
    $productType = $_POST['selectedType'];
    $productColor = $_POST['selectedColor'];
    $productDescription = $_POST['productDescription'];
    $productPrice = $_POST['productPrice'];
    $productQuantity = $_POST['productQuantity'];

    // Assuming 'user_id' is the identifier for the logged-in user
    $userId = $_SESSION['user_id'];

    $sql = "INSERT INTO cart (userid, productid, productname, producttype, productdescription, productcolour, productprice, quantity)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isssssss", $userId, $productId, $productName, $productType, $productDescription, $productColor, $productPrice, $productQuantity);
    
    if ($stmt->execute()) {
        header("Location: productbuy.php");
        exit();
    } else {
        echo "Error adding product to cart: " . $stmt->error;
    }
} else {
    echo "Invalid request";
}
?>
