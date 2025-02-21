<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['postTitle'];
    $content = $_POST['postContent'];

    $targetDir = "static/uploads/";
    $targetFile = $targetDir . basename($_FILES["imageUpload"]["name"]);
    move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $targetFile);

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO posts (title, content, image_path) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $content, $targetFile);

    if ($stmt->execute()) {
        header("Location: displayposts.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
