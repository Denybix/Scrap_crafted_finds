<?php
include("connection.php");
session_start(); 

if(isset($_POST['login'])) {
    $number = $_POST['number'];
    $pwd = $_POST['password'];
    
    $query = "SELECT * FROM regdata WHERE telphone = '$number' && password = '$pwd'";
    $data = mysqli_query($conn, $query);
    
    $total = mysqli_num_rows($data);

    if($total == 1) {
        $_SESSION['telphone'] = $number; 
        header("Location: http://localhost/php_program/project.php"); 
        exit();
    } else {
        echo "Login failed!!!";
    }
}
?>