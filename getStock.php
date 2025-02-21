<?php
include("connection.php");

if (isset($_GET['type']) && isset($_GET['color']) && isset($_GET['productId'])) {
    $productType = $_GET['type'];
    $productColor = $_GET['color'];
    $productId = $_GET['productId'];

    $sql = "SELECT Stock FROM variations WHERE ProductID = ? AND Types = ? AND Color = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $productId, $productType, $productColor);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stockCount = $row['Stock'];

        echo $stockCount;
    } 
    else {
        echo 'Stock not available';
    }
} else {
    echo 'Invalid request';
}
?>
