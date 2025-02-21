<?php
$productId = $_POST['productId'];
$rating = $_POST['rating'];


include("connection.php");

$sql = "UPDATE products SET productRating = ? WHERE productId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("is", $rating, $productId);

if ($stmt->execute()) {
    echo "Rating updated successfully.";
} else {
    echo "Error updating rating.";
}

$stmt->close();
$conn->close();
?>
