<?php
include("connection.php");

if (isset($_GET['type']) && isset($_GET['productId'])) {
    $selectedType = $_GET['type'];
    $productId = $_GET['productId'];
    $sqlColors = "SELECT Color FROM variations WHERE ProductID = ? AND Types = ?";
    $stmtColors = $conn->prepare($sqlColors);
    $stmtColors->bind_param("ss", $productId, $selectedType);
    $stmtColors->execute();
    $resultColors = $stmtColors->get_result();

    $colors = array();
    while ($rowColor = $resultColors->fetch_assoc()) {
        $colors[] = $rowColor['Color'];
    }

    echo json_encode($colors);
}
?>
