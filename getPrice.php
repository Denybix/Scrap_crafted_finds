<?php include("connection.php");

if (isset($_GET['type']) && isset($_GET['productId'])) {
    $selectedType = $_GET['type'];
    $productId = $_GET['productId'];

    $sqlPrice = "SELECT Price FROM variations WHERE ProductID = ? AND Types = ?";
    $stmtPrice = $conn->prepare($sqlPrice);
    $stmtPrice->bind_param("ss", $productId, $selectedType);
    $stmtPrice->execute();
    $resultPrice = $stmtPrice->get_result();

    if ($rowPrice = $resultPrice->fetch_assoc()) {
        $price = $rowPrice['Price'];
        echo $price; 
    } else {
        echo "Price not available";
    }
}
?>
